<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\Filiere;
use App\Models\Parcour;
use Database\Factories\FiliereFactory;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departement = Departement::factory()->create();
        $parcour = Parcour::factory()->for($departement)->create();
        Filiere::factory()->count(1)->for($parcour)->create();
    }
}
