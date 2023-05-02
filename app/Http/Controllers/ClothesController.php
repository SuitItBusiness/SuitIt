<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    public function showClothes()
    {
        $prendas = Clothes::all(); // Nos saca todos las prendas de la BBDD
        return view('/', @compact('prendas'));
    }
}
 ?>

