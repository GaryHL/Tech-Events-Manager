<?php

namespace App\Http\Controllers;

use App\Models\event_user;
use App\Models\Events;
use App\Models\User;
use Illuminate\Http\Request;

class RelationEventsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $events = $user->events;
        return view('myTickets', compact('events'));
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $event = Events::find($request->event_id);
        
        if (!$user->events->contains($event->id)) {
            $event->users()->attach($user);
            return view('myTickets', compact('user', 'event'));
        }else{
            return redirect()->back()->with('message','no puedes inscribirte dos veces');
        }
        

        return redirect()->back()->with('message','Te has inscrito correctamente');
    }
}
