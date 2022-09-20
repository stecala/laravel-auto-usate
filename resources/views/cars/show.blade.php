@extends('layouts.main')


@section('main-content')

    <div class="container">
        <div class="row py-5">
            <div class="col-8 offset-2">
                <div class="row">
                    <div class="col-12">
                    <h6>{{ $car->car_name }}</h6>
                    <h1>{{ $car->car_model }}</h1>
                    <small>{{ $car->car_km }}</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                    <p>{{ $car->plate_number }}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

@endsection
