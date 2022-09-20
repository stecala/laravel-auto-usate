@extends('layouts.main')

@section('title', 'edit')
     
@section('main-content')
<div class="container-lg">
    <div class="row py-5">
       <div class="col-8 offset-2">
          <form action="{{ route('cars.update', $car->id) }}" method="POST">
             @csrf
             @method('PUT')
             @include('cars.form.form')
             <button type="submit" class="btn btn-primary">Edit car</button>
             
          </form>
       </div>
    </div>
 </div>
@endsection