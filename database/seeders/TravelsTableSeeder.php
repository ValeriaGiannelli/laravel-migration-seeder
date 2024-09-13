<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il model
use App\Models\Travel;

// importo il faker
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types= [
            'Culturle',
            'Avventurosa',
            'Naturalistica',
            'Enogastronomica',
            'Relax',
            'Crociera',
            'Sportiva'
        ];
        for($i=0; $i < 20; $i++){
            $new_travel = new Travel();
            $new_travel->package_name = $faker->words(5, true);
            $new_travel->destination = $faker->word();
            $new_travel->departure_date = $faker->dateTimeBetween('-1 month', '+1 year');
            // dump($new_travel->departure_date);
            $new_travel->return_date = $faker->dateTimeBetween('-1 week', '+1 year');
            $new_travel->duration = $faker->randomNumber(2, false);
            $new_travel->price = $faker->randomNUmber(4, false);
            $new_travel->trip_type = $faker->randomElements($types)[0];
            $new_travel->aviable = $faker->boolean();
            // dump($new_travel);
            $new_travel->save();
        }
    }
}
