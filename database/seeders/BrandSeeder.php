<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung Galaxy',
                'discription' => 'Samsung Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                
            ],
            [
                'name' => 'Apple iPhone 12',
                'discription' => 'Apple Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'discription' => 'Google Pixel Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                
            ],
            [
                'name' => 'LG V10 H800',
                'discription' => 'LG Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                
            ],
            [
                'name' => 'Samsung Galaxy2',
                'discription' => 'Samsung Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                
            ],
            [
                'name' => 'Apple iPhone 14',
                'discription' => 'Apple Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                
            ],
            [
                'name' => 'Google Pixel 3 XL',
                'discription' => 'Google Pixel Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                
            ],
            [
                'name' => 'LG V10 H8002',
                'discription' => 'LG Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                
            ]
            
            
        ];
            
       
        foreach ($brands as $key => $value) {
            Brand::create($value);
        }
    }
}
