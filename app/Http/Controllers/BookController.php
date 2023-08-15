<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index',['books' => $books]);
    }
    public function store(){
error_log('logic to add the book');
    $book = new Book();
    $book->name = request('name');
    $book->author = request('author');


    $book->save();
return redirect()->route('books.index');
    }
    public function create(){
        return view('books.create');
    }

    public function show($id){
        $book = Book::find($id);
        error_log($book);

     return view('books.show',['book' => $book]);
    }
    //
}
