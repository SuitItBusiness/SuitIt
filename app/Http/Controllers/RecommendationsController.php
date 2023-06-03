<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wardrobe;
use App\Models\Category;
use App\Models\Event;
use App\Models\Recommendation;
use Exception;
use Illuminate\Support\Facades\Auth;

class RecommendationsController extends Controller
{
    
    public function makeRecommendation(Request $request){

        // Assign recommednation to a user
        $recommendation = new Recommendation();
        $recommendation->user_id = Auth::id();
        $recommendation->save();

        // utility variables
        $categories = Category::all();
        $event = Event::find($request->eventId);
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();

        $eventClothes = $event->clothes;
        $eventClothesId = [];
        foreach ($eventClothes as $clt) {
            $eventClothesId[] = $clt->id;
        }

        // Add selected article
        $selectedArticle = $wardrobe->clothes()->where('clothes_id', $request->articleId)->first();
        $recommendation->clothes()->attach($selectedArticle->id);

        try {
            //code...

        if($selectedArticle->season == 'winter'){ //filter for season
            foreach ($categories as $cat) {
                if($cat->id != $selectedArticle->category_id){ // Filter for categories
                    // Obtain clothes that match with category and event
                    $options = $wardrobe->clothes()->where('category_id', $cat->id)
                    ->where('season', '<>' , 'summer' )
                    ->whereIn('clothes.id', $eventClothesId)->get();
                    $randomOption = rand(0, count($options)-1);

                    // Add clothes to the recommendation
                    $recommendation->clothes()->attach($options[$randomOption]->id);
                }
            }
        }else{
            foreach ($categories as $cat) {
                if($cat->id != $selectedArticle->category_id && $cat->id != 3){ // Filter for categories
                    // Obtain clothes that match with category and event
                    $options = $wardrobe->clothes()->where('category_id', $cat->id)
                    ->whereIn('clothes.id', $eventClothesId)->get();
                    $randomOption = rand(0, count($options)-1);

                    // Add clothes to the recommendation
                    $recommendation->clothes()->attach($options[$randomOption]->id);
                }
            }
        }

        $clothes = $recommendation->clothes;
        return view('recommendation', @compact('clothes'));

    } catch (Exception $e) {
        // if an errors occurs delete the recommendation
        $recommendation->clothes()->detach();
        $recommendation->delete();
        return back()->with('errors', "No existen suficientes prendas de esa categoría");
    }
    }

    public function showRecommendations(){
        // Take all the recommendations from the DB
        $recommendations = Recommendation::where('user_id', Auth::id())->get();

        return view('recommendationsList', @compact('recommendations'));
    }
}
