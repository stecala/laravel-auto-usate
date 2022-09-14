<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars=car::all();
        return view('welcome', compact('cars'));
    }
}
