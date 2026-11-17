<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view("welcome", compact("books"));
    }

    public function create()
    {
        return view("bookForm");
    }

    public function store(StoreBookRequest $request)
    {
        Book::create([
            "title" => $request->title,
            "published_year" => $request->published_year,
            "writer" => $request->writer,
            "cover_path" => "dummy.png"
        ]);

        return redirect("/");
    }

    public function show(Book $book)
    {
        return view("bookShow", compact("book"));
    }

    public function edit(Book $book)
    {
        return view("bookEdit", compact("book"));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update([
            "title" => $request->title,
            "published_year" => $request->published_year,
            "writer" => $request->writer,
        ]);

        return redirect("/books/" . $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect("/");
    }
}
