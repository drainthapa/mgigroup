<?php

use App\Introduction;
use Illuminate\Database\Seeder;

class IntroductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Introduction::create([
        	'title' => 'We are a MGI Group & Team',
        	'description' => 'Manakamana Group of Industries takes a holistic approach towards sustainability, optimizing the use of available resources such as raw materials, utilities, human resources, etc.MGI Group constantly works towards minimizing its environmental footprint through this approach.',
        	'image' => '2.png',
        	'btntext' => 'Start Exploring',
        ]);
    }
}
