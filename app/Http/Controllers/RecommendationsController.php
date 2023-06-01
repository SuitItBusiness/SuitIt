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

        $recommendation = [];
        $categories = Category::all();
        $event = Event::find($request->eventId);
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();
        // $clothes = $wardrobe->clothes;
        $eventClothes = $event->clothes;
        $eventClothesId = [];
        foreach ($eventClothes as $clt) {
            $eventClothesId[] = $clt->id;
        }

        // Add selected article
        $selectedArticle = $wardrobe->clothes()->where('clothes_id', $request->articleId)->first();
        $recommendation[] = $selectedArticle;

        if($selectedArticle->season == 'winter'){
            foreach ($categories as $cat) {
                if($cat->id != $selectedArticle->category_id){
                    // Añadimos ropa a la recomendacion

                    $options = $wardrobe->clothes()->where('category_id', $cat->id)
                    ->where('season', '<>' , 'summer' )
                    ->whereIn('clothes.id', $eventClothesId)->get();
                    $randomOption = rand(0, count($options)-1);
                    $recommendation[] = $options[$randomOption];
                }
            }
        }else{
            foreach ($categories as $cat) {
                if($cat->id != $selectedArticle->category_id && $cat->id != 3){
                    // Añadimos ropa a la recomendacion

                    $options = $wardrobe->clothes()->where('category_id', $cat->id)
                    ->whereIn('clothes.id', $eventClothesId)->get();
                    $randomOption = rand(0, count($options)-1);
                    $recommendation[] = $options[$randomOption];
            }
            }
        }

        return view('recommendation', ['recommendation' => $recommendation]);
    }
}
