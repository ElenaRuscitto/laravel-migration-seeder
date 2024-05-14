<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeederFakers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
           $new_train = new Train;
           $new_train->agency = $faker->word(10, true);
           $new_train->departure_station = $faker->word(2, true);
           $new_train->arrival_station = $faker->word(2, true);
           $new_train->departure_time = $faker->time();
           $new_train->arrival_time = $faker->time();
           $new_train->train_code = $faker->randomNumber(5, true);
           $new_train->number_carriages = $faker->randomDigitNotNull();
           $new_train->is_time = $faker->boolean();
           $new_train->deleted = $faker->boolean();

           $new_train->save();
        }
    }
}
