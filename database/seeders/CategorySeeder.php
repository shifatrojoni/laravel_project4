<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Nordic Chair',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kruzo Aero Chair',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ergonomic Chair',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sofa',
        ]);
        DB::table('categories')->insert([
            'name' => 'Table',
        ]);
        DB::table('categories')->insert([
            'name' => 'Relaxing Chair',
        ]);
    }
}
