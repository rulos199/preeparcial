<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    // Mostrar todas las categorías
    public function index()
    {
        return Category::all();
    }

    // Guardar una nueva categoría
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return response()->json($category, 201);
    }

    // Mostrar una categoría específica
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    // Actualizar una categoría existente
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->validated());
        return response()->json($category);
    }

    // Eliminar una categoría
    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(null, 204);
    }

    // Método adicional: Mostrar categorías activas con sus libros relacionados
    public function activeWithBooks()
    {
        $categories = Category::with('books')->where('status', true)->get();
        return response()->json($categories);
    }
}
