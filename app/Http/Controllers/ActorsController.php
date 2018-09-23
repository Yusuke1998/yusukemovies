<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\actorsRequests;
use App\Actor;
class ActorsController extends Controller
{
    
    public function index()
    {
        $actores = Actor::all();
        return view('admin.actores.list')->with('actores',$actores);
    }

    public function create()
    {
        return view('admin.actores.create');
    }

    public function store(actorsRequests $request)
    {
        $actor = Actor::create($request->all());
        $actor->save();
        return back()->with('info', 'El actor fue agregado con exito!');
    }

    public function show($id)
    {
        $actor = Actor::find($id);
        return view('admin.actores.show',compact('actor'));
    }

    public function edit($id)
    {   
        $actor = Actor::find($id);
        return view('admin.actores.edit',compact('actor'));
    }

    public function update(actorsRequests $request, $id)
    {
        $actor = Actor::find($id);
        $actor->firstname  = $request->firstname;
        $actor->lastname  = $request->lastname;
        $actor->biography  = $request->biography;
        $actor->save();
        return back()->with('info','El actor '.$actor->firstname.' '.$actor->lastname.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return back()->with('info','El actor '.$actor->firstname.' '.$actor->lastname.' eliminado con exito!');
    }
}
