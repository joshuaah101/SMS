<?php

namespace Modules\StdClass\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\StdClass\Entities\ClassAlphabet;

class DefaultAlphabetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ClassAlphabet::count() < 0) {
            $alphas = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', '0', 'P'];

            foreach ($alphas as $alpha) {
                ClassAlphabet::create([
                    'title' => $alpha
                ]);
            }
        }

    }
}
