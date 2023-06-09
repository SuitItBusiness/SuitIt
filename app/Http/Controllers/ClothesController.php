<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;
use App\Http\Controllers\WardrobesController;
use App\Http\Controllers\EventsController;
use App\Models\Category;
use App\Models\Event;

class ClothesController extends Controller
{
    public function showClothes()
    {

        $clothes = Clothes::where('general', true)->get(); // Nos saca todos las prendas generales de la BBDD
        return view('index', @compact('clothes'));

    }

    public function addClothes(){
        $categories = Category::all();
        $events = Event::all();

        return view('addClothes', @compact('categories','events'));
    }
    public function createClothes(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:clothes,name|string|min:2|max:255',
            'color' => 'required|string|min:2|max:255',
            'brand' => 'required|string|min:2|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'comfort_level' => 'required|integer|min:1|max:10',
            'season' => 'required',
            'category' => 'required',
            'event' => 'required'
        ]);

        $errors = $request->has('errors');

        if (!$errors) {
            $article = new Clothes;
            $article->name = $request['name'];
            $article->color = $request['color'];
            $article->brand = $request['brand'];
            $article->season = $request['season'];
            $article->price = $request['price'];
            $article->general = false;
            $article->comfort_level = $request['comfort_level'];
            $article->category_id = $request['category'];

            $article->save();
            $imageName = "image-" . $article->id . '.' . $request->image->extension();
            $request->image->move(public_path('assets\img\gallery'), $imageName);
            $article->image = $imageName;

            $article->save();

            if(count($request->event) ==1){
                EventsController::addArticle($article, $request->event);
            }else{
                foreach ($request->event as $event) {
                    EventsController::addArticle($article, $event);
                }
            }

            WardrobesController::addArticle($article->id);

            return back()->with('message', 'Artículo añadido correctamente');
        } else {
            $errors = $request->errors();
            return back()->with('errors', $errors);
        }
    }


}
 ?>




