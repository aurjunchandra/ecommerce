<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,30) as $index)
        {
            Product::create([
                'name' => $faker->name,
                'slug'=> Str::slug($faker->name),
                'category_id'=>$faker->randomNumber(),
                'brand_id'=> $faker->randomNumber(),
                'price'=> '200',
                'qty'=> '20',
                'short_description' => $faker->sentence,
                'long_description' => $faker->sentence,
                'image' => '645b371e83053_1683699486.jpg',
                'gallery_image'=>'["645b371e83053_1683699486.jpg","645b371e836f6_1683699486.png","645b371e83eef_1683699486.webp"]',
               
                'type' => 'top',

            ]);
        }

        foreach(range(1,30) as $index)
        {
            Product::create([
                'name' => $faker->name,
                'slug'=> Str::slug($faker->name),
                'category_id'=>$faker->randomNumber(),
                'brand_id'=> $faker->randomNumber(),
                'price'=> '200',
                'qty'=> '20',
                'short_description' => $faker->sentence,
                'long_description' => $faker->sentence,
                'image' => '645b371e83053_1683699486.jpg',
                'gallery_image'=>'["645b371e83053_1683699486.jpg","645b371e836f6_1683699486.png","645b371e83eef_1683699486.webp"]',
               
                'type' => 'new',

            ]);
        }

        foreach(range(1,30) as $index)
        {
            Product::create([
                'name' => $faker->name,
                'slug'=> Str::slug($faker->name),
                'category_id'=>$faker->randomNumber(),
                'brand_id'=> $faker->randomNumber(),
                'price'=> '200',
                'qty'=> '20',
                'short_description' => $faker->sentence,
                'long_description' => $faker->sentence,
                'image' => '645b371e83053_1683699486.jpg',
                'gallery_image'=>'["645b371e83053_1683699486.jpg","645b371e836f6_1683699486.png","645b371e83eef_1683699486.webp"]',
                'type' => 'discount',

            ]);
        }
    }
}
