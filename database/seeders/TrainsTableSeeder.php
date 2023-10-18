<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $train = new Train();
            $train->azienda = $faker->words(2, true);
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->data_partenza = $faker->date();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->numero_carrozze = $faker->numberBetween(1, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }

    }
}