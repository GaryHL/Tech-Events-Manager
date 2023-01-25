<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return View::make('home', ['events' => $events]);
    }
    public function indexProfile()
    {
        $events = Events::all();
        return View::make('profile', ['events' => $events]);
    }

    public function show(Request $request)
    {
        return View::make('showEvent', ['event' => $request]);
    }

    public function store(Request $request)
    {
        $event = new Events();
        $event->title  = $request->title;
        $event->description  = $request->description;


        // verifica si el formulario tenía el campo " url_img "
        if ($request->hasFile('url_img')) {
            $file = $request->file('url_img');
            $destinationPath = 'images/featureds/';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('url_img')->move($destinationPath, $fileName);
            $event->url_img  = $destinationPath . $fileName;
        } else {
            $event->url_img  = 'noFoto';
        }
        $event->max_participants  = $request->max_participants;
        $event->outstanding  = $request->outstanding;
        $event->fecha  = $request->fecha;
        $event->hora  = $request->hora;
        $event->save();
        return back()->withInput()->with('success', 'Registro Creado');
    }

    public function update(UpdateEventsRequest $request)
    {
        

        return back()->withInput()->with('success', 'Registro actualizado');
    }

    public function destroy(Events $events)
    {
        
    }
}
