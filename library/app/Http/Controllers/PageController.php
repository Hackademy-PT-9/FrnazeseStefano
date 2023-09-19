<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
class PageController extends Controller
{
    public function index(){
        $books = Book::all();
        $authors = Author::all();
        return view('home',compact('books','authors'));
    }
}
