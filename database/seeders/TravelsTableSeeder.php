<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il model
use App\Models\Travel;

// importo il faker
use Faker\Generator as Faker;

// importo str
use Illuminate\Support\Str;

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

            $new_travel->slug = $this->generateSlug($new_travel->package_name);
            // dump($new_travel);
            $new_travel->save();
        }
    }

    // funzione per lo slug
    private function generateSlug($string){
        // variabile che prenda la stringa e sostituisca gli spazi col trattino
        $slug = Str::slug($string, '-');

        // variabile aggiuntiva per il ciclo while
        $original_slug = $slug;

        // se trovo uno slug esistente $exists non sarà null
        $exists = Travel::where('slug', $slug)->first();

        // inizializzo un contatore
        $c = 1;
        // queso ciclo partirà solo se lo slug non è null, quindi c'è
        while($exists){
            // concatena il contatore
            $slug = $original_slug . '-' . $c;
            // ricontrolla che anche questo slug non esiste
            $exists = Travel::where('slug', $slug)->first();
            // se esiste aumenta il contatore di 1
            $c++;
        }

        return $slug;
    }
}
