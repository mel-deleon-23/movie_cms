<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Movie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);


        // Movie List
        Movie::factory()->create([
            'title' => 'The Lord of the Rings: The Return of the King',
            'genre' => 'Fantasy',
            'year' => 2003,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'The Mummy',
            'genre' => 'Action/Adventure',
            'year' => 1999,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'genre' => 'Fantasy',
            'year' => 2004,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Rush Hour',
            'genre' => 'Comedy',
            'year' => 1998,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Forrest Gump',
            'genre' => 'Comedy/Drama',
            'year' => 1994,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'The Hobbit: An Unexpected Journey',
            'genre' => 'Fantasy',
            'year' => 2012,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Cat on a Hot Tin Roof',
            'genre' => 'Drama',
            'year' => 1958,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Avengers: Infinity War',
            'genre' => 'Action/Adventure',
            'year' => 2018,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Avengers: Endgame',
            'genre' => 'Action/Adventure',
            'year' => 2019,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);

        Movie::factory()->create([
            'title' => 'Forrest Gump',
            'genre' => 'Comedy/Drama',
            'year' => 1994,
            // 'imageURL' => 'https://posters.movieposterdb.com/05_07/2003/0167260/l_28833_0167260_03ec0d27.jpg'
        ]);
    }
}
