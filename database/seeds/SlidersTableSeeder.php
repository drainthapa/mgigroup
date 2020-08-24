<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
        	'title' => 'MGI Group makes your life greater',
        	'subtitle' => 'Innovation ! From ground to the Skies',
        	'image' => '1.png',
        	'btntext' => 'Start Exploring',
        ]);

        Slider::create([
        	'title' => 'Reliability Since Decades',
        	'subtitle' => 'Innovation ! From ground to the Skies',
        	'image' => '2.png',
        	'btntext' => 'Start Exploring',
        ]);

        Slider::create([
        	'title' => 'Innovation for the better future',
        	'subtitle' => 'Innovation ! From ground to the Skies',
        	'image' => '3.png',
        	'btntext' => 'Start Exploring',
        ]);
    }
}
