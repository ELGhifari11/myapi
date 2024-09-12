<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    // Menampilkan semua To-Do
    public function index()
    {
        return TodoList::all();
    }

    // Menyimpan To-Do baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $todo = TodoList::create($request->only(['title', 'description']));
        Log::info($todo->id);
        return response()->json($todo, 201);
    }

    // Menampilkan To-Do berdasarkan ID
    public function show($id)
    {
        return TodoList::findOrFail($id);
    }

    // Mengupdate To-Do
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        $todo = TodoList::findOrFail($id);
        $todo->update($request->all());
        return response()->json($todo, 200);
    }

    // Menghapus To-Do
    public function destroy($id)
    {
        TodoList::destroy($id);
        return response()->json([
            'message' => 'Todo dengan ID ' . $id . ' telah terhapus.'
        ], 200);
    }

}

