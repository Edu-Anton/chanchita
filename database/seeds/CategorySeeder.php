<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category = Category::create(['name' => 'Prueba'])->each(function ($category) {
        //     $category->products()->save(factory(App\Product::class)->make());
        // });
        Category::create(['name' => 'Tecnología']);
        Category::create(['name' => 'Perfumes']);
        Category::create(['name' => 'Ropa y Accesorios']);
        Category::create(['name' => 'Niños']);
        Category::create(['name' => 'Joyería']);
        Category::create(['name' => 'Licores']);
        Category::create(['name' => 'Flores y Plantas']);

        // $category = factory(App\Category::class)
        //    ->create()
        //    ->each(function ($user) {
        //         $user->posts()->save(factory(App\Post::class)->make());
        //     });
    }
}
