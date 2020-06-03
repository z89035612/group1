<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Product::class, 50)->create();
        // App\Product::create(['id' => 'pro_no', 'pro_name', 'album', 'artist', 'pro_price', 'timestamp' => 50]);
    }
}
