<!-- @extends('layouts/admin')
@section('content')
  <div class="row">
    <div class="col">
      <h1 class="display-2">View All Movies</h1>
    </div>
  </div>
  <div class="row">
    @foreach($movies as $movie)
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">>{{ $movie -> title }}</h5>
          <h6 class="card-title">>{{ $movie -> genre }}</h6>
          <h6 class="card-title">>{{ $movie -> year }}</h6>
          <a href="{{ route('movies.edit', $movie -> id) }}" card="card-link">Edit</a>
          <a href="{{ route('movies.trash', $movie -> id) }}" card="card-link">Delete</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection  -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Go To Movies') }}
        </h2>
    </x-slot>

    <div class="container pt-5">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-md-4  mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie -> title }}</h5>
                        <h6 class="card-title">{{ $movie -> genre }}</h6>
                        <h6 class="card-title">{{ $movie -> year }}</h6>
                        <a href="{{ route('movies.edit', $movie -> id ) }}" class="card-link">Edit</a>
                        <a href="{{ route('movies.trash', $movie -> id )}}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
