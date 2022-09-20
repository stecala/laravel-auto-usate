@extends('layouts.main')

@section('main-content')
   <form action="{{ route('cars.store') }}" method="POST">
      @csrf
      @include('cars.form.form')
      <button type="submit" class="btn btn-primary">Add car</button>
   </form>
@endsection