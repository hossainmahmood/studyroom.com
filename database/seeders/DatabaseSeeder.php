<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('roles')->insert(['id'=>'1','name' => 'admin', 'display_name' => 'Admin',]);
        DB::table('roles')->insert(['id'=>'2','name' => 'user', 'display_name' => 'User',]);
        DB::table('users')->insert(['role_id'=>'1','name' => 'Admin', 'email' => 'admin@admin.com','password' => Hash::make('admin'),]);
        DB::table('users')->insert(['role_id'=>'2','name' => 'User', 'email' => 'user@user.com','password' => Hash::make('user'),]);
        DB::table('categories')->insert(['cat_name'=>'Academic','cat_details' => 'Academic Course', 'parent_id' => '0',]);
        DB::table('categories')->insert(['cat_name'=>'Professional','cat_details' => 'Professional Course', 'parent_id' => '0',]);

    }
}
