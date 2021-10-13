<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "jelita rahma",
            'username' => "jelita",
            'password' => bcrypt('jelita123'),
            'role' => 1
        ]);
    }
}
