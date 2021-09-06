<?php

namespace Modules\StdClass\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\StdClass\Entities\ClassDepartment;

class DefaultDepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ClassDepartment::count() < 0) {
            $depts = [
                'Science', 'Art', 'Commercial'
            ];
            foreach ($depts as $dept)
                ClassDepartment::create([
                    'title' => $dept,
                    'slug' => Str::slug($dept)
                ]);
        }
    }
}
