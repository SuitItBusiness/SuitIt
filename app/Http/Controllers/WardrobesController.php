<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\Wardrobe;
use Illuminate\Support\Facades\Auth;

class WardrobesController extends Controller
{
    public function addArticle($id, $quantity)
    {
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();

        $wardrobe->clothes()->attach($id, ['quantity' => $quantity ?? 1]);
        $wardrobe->increment('clothes_number');

    }

    public function importGeneralArticles()
    {
        $generalClothes = Clothes::where('general', true)->get();

        foreach ($generalClothes as $clothes) {
            $this->addArticle($clothes->id, 1);
        }

    }

    // public function destroyClothes(Request $request, $id)
    // {
    //     $clothes = Clothes::withTrashed()->findOrFail($id);
    //     $clothes->forceDelete();

    //     return redirect()->route('admin.clothes')->with('success', __(':name has been deleted.', ['name' => $clothes->name]));
    // }
}
