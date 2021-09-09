<?php

namespace Modules\School\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Core\Entities\SiteSetting;
use Modules\School\Entities\School;
use Modules\School\Entities\SchoolType;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (SchoolType::count() < 1) {
            $school_types = ['Creche', 'Kindergarten', 'Nursery', 'Primary', 'Secondary', 'Tertiary'];
            foreach ($school_types as $list) {
                SchoolType::create(['title' => $list, 'slug' => Str::slug($list)]);
            }
        }
        if (School::count() < 1) {
            // Create Creche, Primary and Secondary default schools from the school type created above
            $school_details = [
                [
                    'school_type_id' => 2,
                    'title' => 'Faith in Christ Nursery School',
                    'slug' => 'faith-in-christ-nursery-school-oke-ola-ilaro',
                    'location' => 'Oke ola, Ilaro'
                ],
                [
                    'school_type_id' => 4,
                    'title' => 'Faith in Christ Primary School',
                    'slug' => 'faith-in-christ-primary-school-oke-ola-ilaro',
                    'location' => 'Oke ola, Ilaro'
                ],
                [
                    'school_type_id' => 4,
                    'title' => 'Faith in Christ Primary School',
                    'slug' => 'faith-in-christ-primary-school-oja-odan-ilaro',
                    'location' => 'Oja-Odan, Ilaro'
                ],
                [
                    'school_type_id' => 5,
                    'title' => 'Faith in Christ College',
                    'slug' => 'faith-in-christ-college-ilaro',
                    'location' => 'Ilaro'
                ]
            ];
            foreach ($school_details as $details)
                School::create($details);
        }
    }
}
