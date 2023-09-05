<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller

{
 
    public function index()
    {
        $libri = Book::all(); 
        return view('home', ['libri' => $libri]);
    }

   
    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:150',
            'anno_pubblicazione' => 'nullable|integer|min:1000|max:9999',
            'numero_pagine' => 'required|integer',
        ]);
    
        Book::create([
            'nome' => $request->input('nome'),
            'anno_pubblicazione' => $request->input('anno_pubblicazione'),
            'numero_pagine' => $request->input('numero_pagine'),
        ]);
    
        return redirect()->route('home')->with('success', 'Book created successfully!');
    }
    

   
    public function show(string $id)
    {
        $libro = Book::find($id);
    
        if (!$libro) {
            abort(404, 'Libro non trovato');
        }
        return view('show', ['libro' => $libro]);
    }
    

   
    public function edit(string $id)
    {
        //
    }

 
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
