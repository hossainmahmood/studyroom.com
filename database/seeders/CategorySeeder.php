<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['cat_name'=>'Academic','cat_details' => 'Academic Course', 'parent_id' => '0',]);
        DB::table('categories')->insert(['cat_name'=>'Professional','cat_details' => 'Professional Course', 'parent_id' => '0',]);
    }
}
