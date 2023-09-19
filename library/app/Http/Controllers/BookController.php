<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;


class BookController extends Controller
{

    public function index()
    {
       
    }


    public function create()
    {
        return view('book.create');
    }

    public function store(CreateBookRequest $request)
    {
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
        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if ($book->image) {
                $file_path = 'public/uploads/' . $book->image;
                if (Storage::exists($file_path)) {
                    Storage::delete($file_path);
                }
            }
            $file_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/uploads', $file_name);
            $book->update(['image' => $file_name]);
        }
        $book->update([
            'nome' => $request->input('nome'),
            'anno_pubblicazione' => $request->input('anno_pubblicazione'),
            'numero_pagine' => $request->input('numero_pagine'),
        ]);
        return redirect()->route('home')->with('success', 'Libro aggiornato con successo!');
    }


    public function destroy(Book $book)
    {
        if ($book->image) {
            $file_path = 'public/uploads/' . $book->image;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }
        }
        $book->delete();
        return redirect()->route('home')->with('success', 'Libro eliminato con successo!');
    }
}