@extends('layouts.main')

@section('title', 'edit')
     
@section('main-content')
<div class="container-lg">
    <div class="row py-5">
       <div class="col-8 offset-2">
          <form action="{{ route('cars.store') }}" method="POST">
             @csrf
             @include('cars.form.form')
             <button type="submit" class="btn btn-primary">Add car</button>
          </form>
       </div>
    </div>
 </div>
@endsection