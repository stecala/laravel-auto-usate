@extends('layouts.main')


@section('main-content')
    <div class="container-lg">
        <div class="row py-5">
            <div class="col-8 offset-2">
               <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Car name</th>
                      <th scope="col">Car km</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                     @forelse ($cars as $car)
                        <tr>
                           <td>
                              {{ $car->id }}
                           </td>
                           <td>
                              {{ $car->car_name }}
                           </td>
                           <td>
                                 {{ $car->car_km }}
                           </td>
                           <td>
                              <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-outline-primary" value=“{{ request()->routeIs(‘admin.posts.edit’) ? $post->author : ‘’ }}>Edit</a>
                           </td>
                           <td>
                              <a href="{{ route('cars.show', $car->id) }}" class="btn btn-outline-primary"> Show</a>
                           </td>
                        </tr>
                     @empty
                        <h2 class="text-center">No posts to show</h2>
                     @endforelse
                  </tbody>
                </table>
            </div>
         </div>
      </div>
    </div>
@endsection
