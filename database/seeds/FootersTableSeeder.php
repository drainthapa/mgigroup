<?php

use Illuminate\Database\Seeder;
use App\Footer;

class FootersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Footer::create([
    		'contact' => '98570-29406',
    		'address' => 'Butwal,Rupandehi',
    		'email' => 'info@mgigroup.com.np',
    		'openinghours' => 'Sun - Fri: 9:00 - 6:00',
    		'weekendhours' => 'Closed on Weekends',
    		'about' => 'Manakamana Group of Industries takes a holistic approach towards sustainability, optimizing the use of available resources such as raw materials, utilities, human resources, etc.',
    		'copy_right_one' => 'MGI GROUP | Designed and Developed',
    		'copy_right_two' => 'Lumbini Tech',
        ]);
    }
}
