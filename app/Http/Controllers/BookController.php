<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all(), Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    public function show(Book $book)
    {
        return Book::findOrFail($id);
    }

    public function update(Request $request, Book $book)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book, 200);
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json(null, 204);
    }
}
