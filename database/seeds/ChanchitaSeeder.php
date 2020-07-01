<?php

use Illuminate\Database\Seeder;

class ChanchitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chanchita = factory(App\Chanchita::class)->create([
            'url_img' => 'public/chanchita2.jpg',
            'user_id' => 1
        ]);
        $chanchita = factory(App\Chanchita::class)->create([
            'url_img' => 'public/chanchita3.jpg',
            'user_id' => 1
        ]);
        $chanchita = factory(App\Chanchita::class)->create([
            'url_img' => 'public/chanchita1.jpg',
            'user_id' => 1
        ]);
        $chanchita = factory(App\Chanchita::class)->create([
            'url_img' => 'public/chanchita2.jpg',
            'user_id' => 2
        ]);
    }
}
