<?php

use App\CompanyGroup;
use Illuminate\Database\Seeder;

class CompanyGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyGroup::create([
        	'icon' => 'icon_cone_alt',
        	'name' => 'Manamakama Eta Udyog',
        	'slug' => 'manakamana-eta-udyog',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_piechart',
        	'name' => 'New Mankamana Eta Udyog',
        	'slug' => 'new-manakamana-eta-udyog',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_easel',        	
            'name' => 'New Manakamana Miller',
        	'slug' => 'new-mankamana-miller',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_table',     	
            'name' => 'Roadyz Automart Pvt. Ltd.',
        	'slug' => 'roadyz-automart',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_lightbul',
        	'name' => 'Manamakama Eta Udyog',
        	'slug' => 'manakamana-eta-udyog',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_tools',      	
            'name' => 'New Mankamana Eta Udyog',
        	'slug' => 'new-manakamana-eta-udyog',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_star',
            'name' => 'New Manakamana Miller',
        	'slug' => 'new-mankamana-miller',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_papercli',
        	'name' => 'Roadyz Automart Pvt. Ltd.',
        	'slug' => 'roadyz-automart',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);

        CompanyGroup::create([
        	'icon' => 'icon_piechart',
        	'name' => 'Manamakama Eta Udyog',
        	'slug' => 'manakamana-eta-udyog',
        	'description' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.',
        ]);


    }
}
