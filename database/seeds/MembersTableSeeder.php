<?php

use Illuminate\Database\Seeder;
use App\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Member::truncate();
        factory(App\Member::class, 50)->create();
        // APP\Member::create(['id' => 'name', 'email', 'password', 'remember_token', 'timestamp' => 50]);
    }
}
