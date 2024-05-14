<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train ();
        $new_train->agency = 'Trenitalia';
        $new_train->departure_station = 'Roma Termini';
        $new_train->arrival_station = 'Livorno Centrale';
        $new_train->departure_time = 95000;
        $new_train->arrival_time = 130000;
        $new_train->train_code = '90452';
        $new_train->number_carriages = 9;

     //  dump($new_train);
        $new_train->save();
    }
}
