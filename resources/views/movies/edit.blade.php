@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Update Movie
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('movies.update', $movie -> id) }}" method="POST">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div> 
            @endif
            @method('PUT')
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $movie -> title }}">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" aria-describedby="genre" value="{{ $movie -> genre }}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" aria-describedby="year" value="{{ $movie -> year }}">
                @error('year')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection