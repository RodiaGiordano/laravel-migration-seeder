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
        for($i=0; $i < 10; $i++){

        $train = new Train();

        $train->azienda = $faker->words();
        $train->stazione_di_partenza = $faker->name();
        $train->stazione_di_arrivo = $faker->name();
        $train->orario_di_partenza = $faker->time();
        $train->orario_di_arrivo = $faker->time();

        $train->codice_treno = $faker->randomDigit();
        $train->numero_carrozze = $faker->randomDigit();
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();
        $train->data_di_partenza = $faker->date();
        
        $train->save();
        

}
    }
}
