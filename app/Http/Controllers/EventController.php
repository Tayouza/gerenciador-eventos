<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();

        return view('welcome', ['events'=>$events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->date = $request->date;
        $event->description = $request->description;

        // image upload
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName()).strtotime("now") . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
            
        }else{
            $event->image = '';
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento Criado com Sucesso!');
        
    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }

    public function search (Request $request) {
        $search = $request->search;
        $events = Event::where('title', 'like', "%$search%")->get();
        return view('welcome', [
            'events' => $events
        ]);
    }
}
