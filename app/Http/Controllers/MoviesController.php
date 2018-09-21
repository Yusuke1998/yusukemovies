<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\moviesRequests;
use App\Movie;
use App\Category;
use App\User;
use App\Poster;
use App\Director;
use App\Actor;
use App\Tag;
use App\Commentary;
use App\Qualification;
use App\Year;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Movie::orderBy('title','ASC')->paginate(5);
        return view('admin.peliculas.list')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        $usuarios = User::all();
        $tags = Tag::all();
        $años = Year::all();
        $actores = Actor::all();
        $directores = Director::all();

        return view('admin.peliculas.create')
        ->with('categorias',$categorias)
        ->with('usuarios',$usuarios)
        ->with('tags',$tags)
        ->with('años',$años)
        ->with('actores',$actores)
        ->with('directores',$directores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(moviesRequests $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Movie::find($id);
        return view('admin.peliculas.show',compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Movie::find($id);
        return view('admin.peliculas.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(moviesRequests $request, $id)
    {
        $pelicula = Movie::find($id);

        return back()->with('info','La pelicula '.$pelicula->title.' '.'fue editada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Movie::find($id);
        $pelicula->delete();
        return back()->with('info','La pelicula '.$pelicula->title.' '.'fue eliminada con exito!');
    }
}
