<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\Clothes;

class EventsController extends Controller
{
    public function addArticle($id, $eventId)
    {
        $event = Event::findOrFail($eventId);
        $article = Clothes::findOrFail($id);

        $event->clothes()->attach($id);
    }
}
