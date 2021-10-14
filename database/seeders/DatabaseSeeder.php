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
        /*
        |--------------------------------------------------------------------------
        | Seeder For table users.
        |--------------------------------------------------------------------------
        */

        DB::table('users')->insert([
            'name' => "jelita rahma",
            'username' => "jelita",
            'password' => bcrypt('jelita123'),
            'role' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Petter Quill",
            'username' => "starlord",
            'password' => bcrypt('starlord123'),
            'role' => 1
        ]);

        DB::table('users')->insert([
            'name' => "pancaran ratna mustika",
            'username' => "anca",
            'password' => bcrypt('anca123'),
            'role' => 2
        ]);

        /*
        |--------------------------------------------------------------------------
        | Seeder For table outgoing_mails.
        |--------------------------------------------------------------------------
        */
        DB::table('incoming_mails')->insert([
            'title' => "Frozen Thunder",
            'subject' => "Frozen Thunder Movie",
            'from' => "Prince Hans",
            'to' => "Queen Anna",
            'phone' => "081394524240",
            'content' => "Let's go for Frozen Thunder Movie tommorow anna",
            "file" => "incoming_mail-1634136509.pdf"
        ]);

        /*
        |--------------------------------------------------------------------------
        | Seeder For table outgoing_mails.
        |--------------------------------------------------------------------------
        */
        DB::table('outgoing_mails')->insert([
            'title' => "Anna Coronation days",
            'subject' => "Queen Anna Coronation Day",
            'from' => "Ricky the thunder",
            'to' => "Elsa of arrandlee",
            'phone' => "081394524240",
            'content' => "Wanna come with me to anna coronation tomorow",
            "file" => "outgoing_mail-1634135812.pdf"
        ]);
    }
}
