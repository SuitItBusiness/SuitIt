<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClothesController extends Controller
{
    public function showClothes()
    {
        $clothes = Clothes::all(); // Nos saca todos las prendas de la BBDD
        return view('/', @compact('clothes'));
    }
}
 ?>

