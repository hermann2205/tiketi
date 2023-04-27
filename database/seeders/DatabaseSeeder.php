<?php

namespace Database\Seeders;

use App\Models\Admins;
use App\Models\Billets;
use App\Models\CategEvents;
use App\Models\CategoriePlaces;
use App\Models\CategoriesPlaceInEvenements;
use App\Models\Comptes;
use App\Models\EndroitEv;
use App\Models\Evenements;
use App\Models\ModelBillets;
use App\Models\Modelprod;
use App\Models\Organisateurs;
use App\Models\Payements;
use App\Models\Places;
use App\Models\TypeEvents;
use App\Models\Types_events;
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
        // \App\Models\User::factory(10)->create();

        Comptes::factory(3)->create();
        Admins::factory(2)->create();
        Organisateurs::factory(1)->create();
        CategEvents::factory(5)->create();
        Evenements::factory(10)->create();
        CategoriesPlaceInEvenements::factory(5)->create();
        CategoriePlaces::factory(6)->create();
        Places::factory(10)->create();
        Billets::factory(15)->create();
        ModelBillets::factory(10)->create();
        Payements::factory(5)->create();
    }
}
