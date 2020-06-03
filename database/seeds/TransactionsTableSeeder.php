<?php

use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Transaction::truncate();
        factory(App\Transaction::class, 50)->create();
        // APP\Transaction::create(['id' => 'user_id', 'pro_no', 'pro_price', 'total_price', 'timestamp' => 50]);
    }
}
