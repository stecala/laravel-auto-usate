<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\CarModel;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) {
            
            $newCar=new CarModel();
            $newCar->car_name = $faker->name();
            $newCar->car_model = $faker->name();
            $newCar->car_km = $faker->numberBetween(1000, 100000);
            $newCar->plate_number = $faker->name();
            $newCar->save();

        }
    }
}
