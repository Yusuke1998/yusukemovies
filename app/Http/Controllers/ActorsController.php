<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class ActorsController extends Controller
{
    
    public function index()
    {
        $actores = Actor::orderBy('firstname','ASC')->paginate(5);
        return view('admin.actores.list')->with('actores',$actores);
    }

    public function create()
    {
        return "Metodo create";
    }

    public function store(Request $request)
    {

        return back()->with('info', 'El actor fue agregado con exito!');
    }

    public function show($id)
    {
        dd($id);
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update(Request $request, $id)
    {
        $actor = Actor::find($id);

        return back()->with('info','El actor '.$actor->firstname.' '.$actor->lastname.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return back()->with('info','El actor '.$actor->firstname.' '.$actor->lastname.' eliminado con exito!');
    }
}
