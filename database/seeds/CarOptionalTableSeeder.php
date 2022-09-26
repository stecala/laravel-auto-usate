<?php

use App\Models\Car;
use App\Optional;
use Illuminate\Database\Seeder;

class CarOptionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = Car::all();

        foreach ($cars as $car) {
            $randomOptional = Optional::inRandomOrder()->limit(rand(1,4))->get();
            $car->optionals()->attach($randomOptional);
        }
    }
}
