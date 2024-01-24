<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Nordic Chair 1',
            'description' => 'product description content',
            'image' => 'images/1705983475.png',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Nordic Chair 2',
            'description' => 'product description content',
            'image' => 'images/1705983045.png',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Kruzo Aero Chair 1',
            'description' => 'product description content',
            'image' => 'images/1705982723.jpg',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Kruzo Aero Chair 2',
            'description' => 'product description content',
            'image' => 'images/1705982723.jpg',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '2',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Ergonomic Chair 1',
            'description' => 'product description content',
            'image' => 'images/1705983045.png',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '2',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Ergonomic Chair 2',
            'description' => 'product description content',
            'image' => 'images/1705983197.jpg',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '2',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'White Sofa',
            'description' => 'product description content',
            'image' => 'images/1705983475.png',
            'tags' => 'Wood',
            'price' => '100',
            'category_id' => '3',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Black Sofa',
            'description' => 'product description content',
            'image' => 'images/1705982723.jpg',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '3',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Red Table',
            'description' => 'product description content',
            'image' => 'images/1705982723.jpg',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '3',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'White Table',
            'description' => 'product description content',
            'image' => 'images/1705983045.png',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '4',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Pink Relaxing Chair',
            'description' => 'product description content',
            'image' => 'images/1705983197.jpg',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '4',
            'availibility' => '1'
         ]);
         DB::table('products')->insert([
            'name' => 'Red Relaxing Chair',
            'description' => 'product description content',
            'image' => 'images/1705983475.png',
            'tags' => "Wood",
            'price' => '100',
            'category_id' => '4',
            'availibility' => '1'
         ]);
    }
}
