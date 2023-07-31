<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{
    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' =>$request->name,
        ]);
        
        return redirect()->route('homepage')->with('success', 'Categoria aggiunta con successo!'); 
    }
    
}
