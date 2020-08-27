<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
        	'name' => 'Rita Gyanwali',
        	'designation' => 'Civil Engineer',
        	'workdesc' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est',
        	'facebook' => 'http://facebook.com/',
        	'twitter' => 'http://twitter.com/',
        	'instagram' => 'http://instagram.com/',
        	'youtube' => 'http://youtube.com/',
        	'image' => '19.jpg',
        ]);

        Team::create([
        	'name' => 'Hari Neupane',
        	'designation' => 'Architect Engineer',
        	'workdesc' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est',
        	'facebook' => 'http://facebook.com/',
        	'twitter' => 'http://twitter.com/',
        	'instagram' => 'http://instagram.com/',
        	'youtube' => 'http://youtube.com/',
        	'image' => '21.jpg',
        ]);

        Team::create([
        	'name' => 'Ramesh Pokhrel',
        	'designation' => 'Indoor Engineer',
        	'workdesc' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est',
        	'facebook' => 'http://facebook.com/',
        	'twitter' => 'http://twitter.com/',
        	'instagram' => 'http://instagram.com/',
        	'youtube' => 'http://youtube.com/',
        	'image' => '18.jpg',
        ]);

        Team::create([
        	'name' => 'Rita Gyanwali',
        	'designation' => 'Civil Engineer',
        	'workdesc' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est',
        	'facebook' => 'http://facebook.com/',
        	'twitter' => 'http://twitter.com/',
        	'instagram' => 'http://instagram.com/',
        	'youtube' => 'http://youtube.com/',
        	'image' => '20.jpg',
        ]);

        Team::create([
        	'name' => 'Rita Gyanwali',
        	'designation' => 'Civil Engineer',
        	'workdesc' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est',
        	'facebook' => 'http://facebook.com/',
        	'twitter' => 'http://twitter.com/',
        	'instagram' => 'http://instagram.com/',
        	'youtube' => 'http://youtube.com/',
        	'image' => '23.jpg',
        ]);

        Team::create([
        	'name' => 'Rita Gyanwali',
        	'designation' => 'Civil Engineer',
        	'workdesc' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est',
        	'facebook' => 'http://facebook.com/',
        	'twitter' => 'http://twitter.com/',
        	'instagram' => 'http://instagram.com/',
        	'youtube' => 'http://youtube.com/',
        	'image' => '23.jpg',
        ]);
    }
}
