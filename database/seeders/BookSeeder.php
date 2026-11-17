<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create ([
            "title" => "laskar pelangi",
            "published_year" => 2007,
            "writer" => "Andrea Hirata",
            "cover_path" => "blabla/coveer.png"
        ]);
    }
}
