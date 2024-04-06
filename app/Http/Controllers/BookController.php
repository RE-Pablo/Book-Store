<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{

    //CRUD METHODS

    public function create(){
        return view('create');
    }

    //Read
    public function index(){
        $books = Book::all();
        // $booksObject = $books[0];
        // return view ('index', ["books"], ['booksObject' => $booksObject]);
        return view('index', ['books' => $books]);
    }

    public function update(Request $request, $id){
        $book = Book::find($id);

        $book -> title = $request -> title;
        $book -> author_name = $request -> author_name;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> published_year;

        $book -> save(); //SQL: INSERT INTO books

        return redirect()->route('book.index');
    }

    public function destroy($id){
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index'); 
    }

    //Más metodos
    public function edit($id){
        $book = Book::find($id); //SQL: SELECT * FROM books WHERE id=1 LIMIT 1;
        return view('edit', ['book'=>$book]);
    }

    public function store(Request $request){
        $book = new Book;
        
        $book -> title = $request -> title;
        $book -> author_name = $request -> author_name;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> published_year;

        $book -> save(); //SQL: INSERT INTO books

        return redirect()->route('book.index');
    }
    
}
