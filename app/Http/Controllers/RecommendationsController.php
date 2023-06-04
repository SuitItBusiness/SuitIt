<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wardrobe;
use App\Models\Category;
use App\Models\Event;
use App\Models\Recommendation;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecommendationsController extends Controller
{
    
    public function makeRecommendation(Request $request){

        // Start the transaction
        DB::beginTransaction();

        // Assign recommendation to a user
        $recommendation = new Recommendation();
        $recommendation->user_id = Auth::id();

        // Utility variables
        $categories = Category::all();
        $event = Event::find($request->eventId);
        $wardrobe = Wardrobe::where('user_id', Auth::id())->first();

        // Assign description to recommendation
        $recommendation->description = $event->name;
        $recommendation->save();

        // Search the clothes that match with the event
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

        DB::commit();

        $clothes = $recommendation->clothes;
        return view('recommendation', @compact('clothes'));

    } catch (Exception $e) {
        // if an errors occurs aborts the transaction
        DB::rollBack();
        return back()->with('errors', "No existen suficientes prendas de esa categoría");
    }
    }

    public function showRecommendations(){
        // Take all the recommendations from the DB
        $recommendations = Recommendation::where('user_id', Auth::id())->get();

        return view('recommendationsList', @compact('recommendations'));
    }
}
