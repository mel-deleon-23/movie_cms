@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Movie Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5>{{ $movie -> title }}</h5>
                    <h6>{{ $movie -> genre }}</h6>
                    <h6>{{ $movie -> year }}</h6>
                    <a href="{{route('movies.edit', $movie->id)}}" card="card-link">Edit</a>
                    <a href="{{ route('movies.trash', $movie -> id) }}" card="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection