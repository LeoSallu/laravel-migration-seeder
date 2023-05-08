<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i <= 10; $i++) {
            $newTrain=new Train();
            $newTrain->company = $faker->randomElement(['Italo', 'Leonardo Express', 'Trenitalia', 'Freccia Rossa','Freccia Bianca','Freccia Argento']);
            $newTrain->departure_station = $faker->randomElement(['Roma Termini','Milano','Napoli','Genova','Trento','Massa Carrara']);
            $newTrain->arrival_station = $faker->randomElement(['Roma Termini','Milano','Napoli','Genova','Trento','Massa Carrara']);
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_id = $faker->randomDigit();
            $newTrain->carriages_number = $faker->numberBetween(2, 10);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
