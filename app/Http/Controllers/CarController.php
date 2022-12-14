<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Optional;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class CarController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars=Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionals=Optional::all();
        return view('cars.create', compact('optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData=$request->validate([

            'car_name'=>'required|max:100|min:2',
            'car_model'=>'required|max:100|min:2',
            'car_km'=>'required|digits_between:0,50000',
            'plate_number'=>'required|max:10|min:5',
            'optionals'=>'min:1',

        ]);

        $data = $request->all();

        $newCar = new Car();
        $newCar->car_name = $data['car_name'];
        $newCar->car_model = $data['car_model'];
        $newCar->car_km = $data['car_km'];
        $newCar->plate_number = $data['plate_number'];
        $newCar->save();
        $newCar->optionals()->sync($data['optionals']);

        return redirect()->route('cars.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $optionals=Optional::all();

        return view('cars.edit', compact('car', 'optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData=$request->validate([

            'car_name'=>'required|max:100|min:2',
            'car_model'=>'required|max:100|min:2',
            'car_km'=>'required|digits_between:0,50000',
            'plate_number'=>'required|max:10|min:5',
            'optionals'=>'min:1',

        ]);


        $data = $request -> all();
        $newCar = Car::findOrFail($id);
        $newCar->car_name = $data['car_name'];
        $newCar->car_model = $data['car_model'];
        $newCar->car_km = $data['car_km'];
        $newCar->plate_number = $data['plate_number'];
        $newCar->save();
        $newCar->optionals()->sync($data['optionals']);
        return redirect()->route('cars.show', $newCar->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $car=Car::findorfail($id);
        $car->delete();
        return redirect()->route('cars.index')->with('delete', $car->car_name);

    }
}
