<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carouserl =new  \App\Carousel([
            "title"=> "Yeni koleksiyonları inceleyin.",
        
        ]);

    }
}
