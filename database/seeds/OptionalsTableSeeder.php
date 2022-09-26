<?php

use Illuminate\Database\Seeder;
use App\Optional;
class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals=[
            'Tettuccio in vetro',
            'Cerchi in lega',
            'Automatico',
            'Adas',
            'Vetri Oscurati'
        ];

        foreach($optionals as $optional){
            $newOptional = new Optional();
            $newOptional->name= $optional;
            $newOptional -> save();
        }
    }
}
