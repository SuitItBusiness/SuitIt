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
        $article = Clothes::findOrFail($id);

        if (!$wardrobe->clothes->contains($id)) { // check if the article is already in the wardrobe
            $wardrobe->clothes()->attach($id, ['quantity' => $quantity ?? 1]);
        } else {
            $wardrobe->clothes()->updateExistingPivot($id, ['quantity' => $quantity ?? 1]);
        }
    }

    public function destroyClothes(Request $request, $id)
    {
        $clothes = Clothes::withTrashed()->findOrFail($id);
        $clothes->forceDelete();

        return redirect()->route('admin.clothes')->with('success', __(':name has been deleted.', ['name' => $clothes->name]));
    }
}
