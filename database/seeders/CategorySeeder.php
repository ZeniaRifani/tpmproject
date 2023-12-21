<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
       DB::table('categories')->insert([
        'category_name'=>'Dessert',
       ]);

       DB::table('categories')->insert([
        'category_name'=>'Drinks',
       ]);
       DB::table('categories')->insert([
        'category_name'=>'Main Course',
       ]);

       DB::table('categories')->insert([
        'category_name'=>'Appetizer',
       ]);
    }
}
