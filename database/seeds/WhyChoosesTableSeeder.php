<?php

use Illuminate\Database\Seeder;
use App\WhyChoose;

class WhyChoosesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WhyChoose::create([
        	'title' => 'Why Choose Us',
        	'subtitle' => 'We’re Your Partner in Your Success',
        	'first' => 'Distinctive Experts That Provide Effortless Expertise',
        	'second' => 'Enriched Outcomes Enabled By Experienced Professionals',
        	'third' => 'Wide-Ranging Thoughts Bread Exceptional Ideas',
        	'fourth' => 'Generating Best Results Through Open Communication',
        	'fifth' => 'Extensive Marketing Research Generates Valuable Insights',
        	'sixth' => 'We are Results-Driven, Oriented, We deliver results',
        	'image' => '2.png',
        ]);
    }
}
