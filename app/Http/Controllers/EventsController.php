<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateEventsRequest;

class EventsController extends Controller
{


    public function indexEvents()
    {
        $events = Events::get();
        return view('events', ['events' => $events]);
    }
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

    public function show(Events $event)
    {
        $user = Auth::user();
        return view('showEvent', ['event' => $event, 'user' => $user]);
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
        $event->link  = $request->link;
        $event->fecha  = $request->fecha;
        $event->hora  = $request->hora;
        $event->save();
        return back()->withInput()->with('success', 'Registro Creado');
    }

    public function update(Request $request, $id)
    {
        $event = Events::find($id);
        $event->title  = $request->title;
        $event->description  = $request->description;

        if ($request->hasFile('url_img')) {
            $file = $request->file('url_img');
            $destinationPath = 'images/featureds/';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('url_img')->move($destinationPath, $fileName);
            $event->url_img  = $destinationPath . $fileName;
        }
        $event->max_participants  = $request->max_participants;
        $event->outstanding  = $request->outstanding;
        $event->link  = $request->link;
        $event->fecha  = $request->fecha;
        $event->hora  = $request->hora;
        $event->save();
        return back()->withInput()->with('success', 'Registro Actualizado');
    }

    public function destroy($id)
    {
        // Find the record in the database using the id
        $event = Events::findOrFail($id);
        // Delete the file from storage
        Storage::delete('public/' . $event->showEvent);
        // Delete the record from the database
        $event->delete();
        // Redirect the user with a message
        return redirect('events')->with('mensaje', 'Event Deleted');
    }
}
