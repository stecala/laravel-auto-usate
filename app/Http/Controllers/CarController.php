<?php

namespace App\Http\Controllers;

use App\CarModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars=CarModel::all();
        return view('welcome', compact('cars'));
    }
}
