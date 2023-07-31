<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(AuthorRequest $request)
    {
        Author::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'birth_date'=>$request->birth_date,
            'nation'=>$request->nation
        ]);

        return redirect()->route('authors.index')->with('success', 'Autore inserito con successo');
    }

}
