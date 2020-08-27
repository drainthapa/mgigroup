<?php

use Illuminate\Database\Seeder;
use App\Certificate;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create([
        	'title' => 'Management System',
        	'slug' => 'management-system',
        	'description' => 'Manufacture of Lomgitudional and Helical Seam Submerged Arc Welded Pipes and Coated Pipes',
        	'image' => 'certificate.jpg',
        ]);

        Certificate::create([
        	'title' => 'Quality Management System',
        	'slug' => 'quality-management-system',
        	'description' => 'Three Layer Polyethylene and Plypropylene ,Dual and Single-layer fusion bonded Eproxy and Internal Epoxy Paint coating',
        	'image' => 'certificate.jpg',
        ]);

        Certificate::create([
        	'title' => 'QMS Registration system',
        	'slug' => 'qms-registration-system',
        	'description' => '8.3 Design and Developement and Servicing',
        	'image' => 'certificate.jpg',
        ]);

        Certificate::create([
        	'title' => 'API Specification Q1',
        	'slug' => 'api-specification',
        	'description' => 'Design and Developement and Servicing',
        	'image' => 'certificate.jpg',
        ]);
    }
}
