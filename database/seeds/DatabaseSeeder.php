<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $this->call(ProductsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
