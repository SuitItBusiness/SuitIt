<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showCategories()
    {
        $category = Category::all(); // Nos saca todos las prendas de la BBDD
        return view('index', @compact('category'));
    }
}
