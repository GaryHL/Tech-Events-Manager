<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventsController
{
    public function index()
    {
        $events = Event::get();
        return view('events.index',['events' => $events]);
    }

    public function show(Event $event)
    {
        return view('events.show', ['event' => $event]);
    }

}
