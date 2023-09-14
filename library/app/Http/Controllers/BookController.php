<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;


class BookController extends Controller
{

    public function index()
    {
        return view('home', ['books' => Book::all()]);

    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nome' => 'required|string|max:150',
            'anno_pubblicazione' => 'nullable|integer|min:1000|max:9999',
            'numero_pagine' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // $public_path ='';
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/uploads', $file_name);
        } else {
            $file_name = '';
        }

        Book::create([
            'nome' => $request->input('nome'),
            'anno_pubblicazione' => $request->input('anno_pubblicazione'),
            'numero_pagine' => $request->input('numero_pagine'),
            'image' => $file_name,
        ]);



        return redirect()->route('home')->with('success', 'Book created successfully!');
    }



    public function show(Book $book)
    {
        return view('show', compact('book'));
    }



    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }


    public function update(Request $request, Book $book)
    {
        if (!$request->hasFile('image') || !$request->file('image')->isValid()) {
            return redirect()->route('home')->with('error', 'Il file non è valido!');
        }

        if ($book->image) {
            $file_path = 'public/uploads/' . $book->image;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }
        }

        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/uploads', $file_name);

        $book->update([
            'nome' => $request->input('nome'),
            'anno_pubblicazione' => $request->input('anno_pubblicazione'),
            'numero_pagine' => $request->input('numero_pagine'),
            'image' => $file_name
        ]);

        return redirect()->route('home')->with('success', 'Libro aggiornato con successo!');
    }




    public function destroy(Book $book)
    {
        //
    }
}