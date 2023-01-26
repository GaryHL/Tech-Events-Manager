<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EventsController extends Controller
{

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

    # UpdateEventsRequest = Trae los name
    public function update(UpdateEventsRequest $request, $id)
    {
        # encontrar 
        $event = Event::find($id);

        # variables
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

        # redirecciona al home
        return redirect('/home');
    }

    public function destroy(Events $events)
    {
    }

    public function edit(){
        return view('edit');
    }
}
