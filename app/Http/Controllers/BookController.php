<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Response;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    // Mostrar todos los libros
    public function index()
    {
        return response()->json(Book::with('category')->get(), Response::HTTP_OK);
    }

    // Crear un nuevo libro
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());
        return response()->json($book, Response::HTTP_CREATED);
    }

    // Mostrar un libro con su categoría
    public function show(Book $book)
    {
        $book->load('category'); // carga la relación
        return response()->json($book, Response::HTTP_OK);
    }

    // Actualizar un libro
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return response()->json($book, Response::HTTP_OK);
    }

    // Eliminar un libro
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
