<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Http\Requests\BookRequest;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', ['books'=>$books]);
    }

    public function create(){
        $authors = Author::all();
        $categories = Category::all();

        return view('books.create', compact('authors', 'categories'));
    }

    public function store(BookRequest $request){
        
        $path_image='';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name=$request->file('image')->getClientOriginalName();
            $path_image=$request->file('image')->storeAs('public/images',$path_name);
        }
        
        $data = Book::create([
            'title'=>$request->title,
            'author_id'=>$request->author_id,
            'year'=>$request->year,
            'pages'=>$request->pages,
            'image'=>$path_image, 
        ]);

        $data->categories()->attach($request->categories);
        return redirect()->route('books.index')->with('success', 'Libro inserito con successo');
    }

    public function show($book){
        $book = Book::findOrFail($book);

        $category = Category::all();
        return view('books.show', ['book'=>$book, 'category'=>$category]);
    }
}
