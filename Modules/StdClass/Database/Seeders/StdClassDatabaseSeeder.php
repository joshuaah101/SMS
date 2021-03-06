<?php

namespace Modules\StdClass\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StdClassDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(DefaultDepartmentTableSeeder::class);
         $this->call(DefaultAlphabetTableSeeder::class);
    }
}
