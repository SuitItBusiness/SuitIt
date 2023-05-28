<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wardrobe;
use Illuminate\Support\Facades\Auth;

class RecommendationsController extends Controller
{
    //
    public function makeRecommendation(Request $request){

        $Recommendation = [];
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();
        $clothes = $wardrobe->clothes;

        return view('armario', @compact('clothes'));
    }
}
