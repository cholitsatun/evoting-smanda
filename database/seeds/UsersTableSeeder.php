<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => 'superadmin',
            'password' => Hash::make('super890'),
            'role' => 'superadmin',
        ]);

        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin890'),
        ]);
    }
}
