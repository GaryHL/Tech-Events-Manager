<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EventsController extends Controller
{

    public function index()
    {
        $events = Events::all();
        return View::make('home',['events' => $events]);
        
    }
    public function indexProfile()
    {
        $events = Events::all();
        return View::make('profile',['events' => $events]);
        
    }

    public function show( Request $request){
        return $request ;
    }

    public function store(Request $request)
    {
        $event = new Events();
        $event->title  = $request->title;
        $event->description  = $request->description;
        $event->url_img  = $request->url_img;
        $event->max_participants  = $request->max_participants;
        $event->outstanding  = $request->outstanding;
        $event->fecha  = $request->fecha;
        $event->hora  = $request->hora;
        $event->save();
        return back()->withInput()->with('success', 'Registro Creado');
    }

    public function update(UpdateEventsRequest $request )
    {
        $event = Events::FindOrFail($request->id);
        $event->title  = $request->title;
        $event->description  = $request->description;
        $event->url_img  = $request->url_img;
        $event->max_participants  = $request->max_participants;
        $event->outstanding  = $request->outstanding;
        $event->fecha  = $request->fecha;
        $event->hora  = $request->hora;
        $event->save();
        
        return back()->withInput()->with('success', 'Registro actualizado');
    }

    public function destroy(Events $events)
    {
    }
}
