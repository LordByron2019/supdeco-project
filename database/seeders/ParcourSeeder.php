<?php

namespace Database\Seeders;

use App\Models\Parcour;
use Illuminate\Database\Seeder;

class ParcourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parcour::factory()->count(1)->create();
    }
}
