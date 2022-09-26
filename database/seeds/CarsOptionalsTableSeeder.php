<?php

use App\Models\Car;
use App\Optional;
use Illuminate\Database\Seeder;

class CarsOptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = Optional::all();
        $cars = Car::all();

        foreach ($optionals as $optional) {
            $optional->cars()->attach($cars->id);
        }
    }
}
