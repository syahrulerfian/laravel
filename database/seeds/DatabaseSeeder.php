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
        $this->call(Buku_seeder::class); 
        $this->call(PembeliSeeder::class);
        $this->call(PenerbitSeeder::class);
        $this->call(PenjualanSeeder::class);
    }
}
