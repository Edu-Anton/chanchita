<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(App\Product::class, 9)->create([
            'category_id' => 1,
            'url_img' => 'public/tecnologia.jpg'
        ]);
        $products = factory(App\Product::class, 9)->create([
            'category_id' => 2,
            'url_img' => 'public/perfumes.jpeg'
        ]);
        $products = factory(App\Product::class, 9)->create([
            'category_id' => 3,
            'url_img' => 'public/clothes.jpg'
        ]);
        $products = factory(App\Product::class, 9)->create([
            'category_id' => 4,
            'url_img' => 'public/kids.jpg'
        ]);
        $products = factory(App\Product::class, 9)->create([
            'category_id' => 5,
            'url_img' => 'public/jewel.jpg'
        ]);
        $products = factory(App\Product::class, 10)->create([
            'category_id' => 6,
            'url_img' => 'public/liquor.jpg'
        ]);
        $products = factory(App\Product::class, 10)->create([
            'category_id' => 7,
            'url_img' => 'public/flower.jpg'
        ]);
    }
}
