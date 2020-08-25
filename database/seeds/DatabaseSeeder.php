<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(FootersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CompanyGroupsTableSeeder::class);
    	$this->call(IntroductionsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
