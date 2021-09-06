<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Entities\SchoolSetting;

class SchoolSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (SchoolSettingTableSeeder::count() < 1) {
            SchoolSetting::create([
                'school_name' => "Faith in Christ College",
                'school_motto' => "school motto",
                'school_principal' => "Name of School Principal",
                'phone_number' => "0801232122",
                'email_address' => "email@email.com",
                'school_pledge'=>"I pledge to my school of honor",
                'school_anthem' => "Arise o compatriot, This school calls obey",
                'about_school'=>"information about the school and is environ",
                'school_description'=>"Descriptive information about the school an her visions",
                'school_address'=>"Physical location of the school",
                'allow_student_registration' => true,
                'allow_student_login' => true,
                'allow_alumni_registration' => true,
                'allow_alumni_login' => true,
                'allow_parent_registration' => true,
                'allow_parent_login' => true,
                'allow_staff_registration' => true,
                'allow_staff_login' => true,
                'allow_general_notification' => true,
                'allow_exam_registration' => true,
                'allow_printing_results' => true,
                'allow_printing_testimonial' => true
            ]);
        }
    }
}
