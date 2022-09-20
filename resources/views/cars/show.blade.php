@extends('layouts.main')

@section('title', 'Show')

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
            <div>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-outline-primary" value=“{{ request()->routeIs('cars.edit') ? $post->author : '' }}>Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input class="btn btn-outline-primary" type="submit" value="cancella">
                </form>
            </div>
        </div>
        </div>

@endsection
