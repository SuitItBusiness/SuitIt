<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\Wardrobe;
use Illuminate\Support\Facades\Auth;

class WardrobesController extends Controller
{
    public static function addArticle($id, $quantity = 1)
    {
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();
    
        // Verificar si el artículo ya está presente en el guardarropa
        $isAlreadyAdded = $wardrobe->clothes()->where('clothes.id', $id)->exists();
    
        if (!$isAlreadyAdded) {
            // Agregar el artículo al guardarropa
            $syncResult = $wardrobe->clothes()->syncWithoutDetaching([$id => ['quantity' => $quantity ?? 1]]);
            $wardrobe->increment('clothes_number');
    
            // Verificar si se agregaron registros nuevos
            $attachedCount = $syncResult['attached'] ?? 0;
            if ($attachedCount > 0) {
                return redirect()->route('index')->with('success', __('Prenda'));
            }else{
                return redirect()->route('index')->with('success', __('Esa prenda ya está en el armario.'));
            }

        }
    
        // Mostrar mensaje indicando que la prenda ya está en el guardarropa
        return redirect()->route('index')->with('info', __('Clothe already added.'));
    }
    
    public function importGeneralArticles()
    {
        $generalClothes = Clothes::where('general', true)->get();

        foreach ($generalClothes as $clothes) {
            $this->addArticle($clothes->id, 1);
        }
        return back();

    }

    public function deleteClothes(Request $request)
    {
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();
        $wardrobe->clothes()->detach($request->id);

        return redirect()->route('wardrobe')->with('info', __('Clothe already deletede.'));
    }

    public function showClothesWardrobe()
    {
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();
        $clothes = $wardrobe->clothes;
        $totalPrice = 0;
        foreach ($clothes as $cloth){
            $totalPrice += $cloth->price * 1;
        }
        $wardrobe->total_price = $totalPrice;
        $wardrobe->update();
        return view('wardrobe', @compact('clothes'));

    }

}
