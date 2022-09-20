<?php

use App\Models\Car;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
/*             $cars = [
                [
                    'car_name'=>'BMW',
                    'car_model'=>'X5',
                    'plate_number'=>'71140',
                    'car_km'=>1000,
                ],
                [
                    'car_name'=>'Toyota',
                    'car_model'=>'Corolla',
                    'plate_number'=>'28770',
                    'car_km'=>1000,
                ],
                [
                    'car_name'=>'Ferrari',
                    'car_model'=>'Roma',
                    'plate_number'=>'999999',
                    'car_km'=>1000,
                ],
                [
                    'car_name'=>'Puegot',
                    'car_model'=>'308',
                    'plate_number'=>'24650',
                    'car_km'=>1000,
                ],
            ]; */


/*         foreach($cars as $car){
            $newCar=new Car();
            $newCar->car_name = $car['car_name'];
            $newCar->car_model = $car['car_model'];
            $newCar->car_km = $car['car_km'];
            $newCar->plate_number =$car['plate_number'];
            $newCar->save();
        } */

        for ($i=0; $i < 30; $i++) {
            
            $newCar=new Car();
            $newCar->car_name = $faker->name();
            $newCar->car_model = $faker->name();
            $newCar->car_km = $faker->numberBetween(1000, 1500);
            $newCar->plate_number = $faker->name();
            $newCar->save();

        } 
    }
}
