<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $authors = Author::factory()->count(3)->create();

        $authors->each(function ($author) {
            Book::factory()->count(2)->create(['author_id' => $author->id]);
        });
    }
}
