<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'App Test Admin',
            'email' => 'admin@admin.com', 
            'password' => bcrypt('123456'),
            'kind' => 'official',
            'token' => 'system generated token'
        ]);
    }
}
