<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wardrobe;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class RecommendationsController extends Controller
{
    //
    public function makeRecommendation(Request $request){

        $eventId = 6;
        $articleId = 12;

        $recommendation = [];
        $categories = Category::all();
        $event = Event::find($eventId);
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();
        $clothes = $wardrobe->clothes;
        $eventClothes = $event->clothes();
        $eventClothesId = [];
        foreach ($eventClothes as $clt) {
            $eventClothesId[] = $clt->id;
        }
        return $event;
        // Add selected article
        $selectedArticle = $wardrobe->clothes()->where('clothes_id', $articleId)->first();
        $recommendation[] = $selectedArticle;

        if($selectedArticle->season == 'winter'){
            foreach ($categories as $cat) {
                if($cat->id != $selectedArticle->category_id){
                    // Añadimos ropa a la recomendacion

                    $options = $wardrobe->clothes()->where('category_id', $cat->id)
                    ->whereIn('id', $eventClothesId)->get();
                    $recommendation[] = $options[0];
                }
            }
        }else{
            foreach ($categories as $cat) {
                if($cat->id != $selectedArticle->category_id && $cat->id != 3){
                    // Añadimos ropa a la recomendacion

                    $options = $wardrobe->clothes()->where('category_id', $cat->id)
                    ->whereIn('id', $eventClothesId)->get();
                    $recommendation[] = $options[0];
            }
            }
        }

        return $recommendation;
    }
}
