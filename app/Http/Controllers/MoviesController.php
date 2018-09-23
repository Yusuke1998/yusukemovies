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
        $peliculas = Movie::all();
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
        // Guardando imagen del poster
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $namePoster = time()."_poster_".$file->getClientOriginalName();
            $file->move(public_path()."/poster/",$namePoster);
        }

        $movie = new Movie;
        $movie->title = $request->title;
        $movie->sinopsis = $request->sinopsis;
        $movie->content = $request->content;
        $movie->user_id = $request->user_id;
        $movie->year_id = $request->year_id;
        $movie->category_id = $request->category_id;
        $movie->director_id = $request->director_id;
        $movie->save();

        $movie->tags()->sync($request->tags);
        $movie->actors()->sync($request->actors);

        $poster = new Poster;
        $poster->name = $namePoster;
        $poster->url = $request->poster_url;
        $poster->movie()->associate($movie);
        $poster->save();

        return back()->with('info','Se ha guardado '.$movie->title.' manera exitosa!');   
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
        $categorias = Category::all();
        $usuarios = User::all();
        $tags = Tag::all();
        $años = Year::all();
        $actores = Actor::all();
        $directores = Director::all();

        return view('admin.peliculas.edit')
        ->with('pelicula',$pelicula)
        ->with('categorias',$categorias)
        ->with('usuarios',$usuarios)
        ->with('tags',$tags)
        ->with('años',$años)
        ->with('actores',$actores)
        ->with('directores',$directores);
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
         // Guardando imagen del poster
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $namePoster = time()."_poster_".$file->getClientOriginalName();
            $file->move(public_path()."/poster/",$namePoster);
        }

        $pelicula = Movie::find($id);
        $pelicula->title = $request->title;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->content = $request->content;
        $pelicula->category_id = $request->category_id;
        $pelicula->year_id = $request->year_id;
        $pelicula->user_id = $request->user_id;
        $pelicula->director_id = $request->director_id;
        $pelicula->save();

        $poster = new Poster;
        $poster->name = $namePoster;
        $poster->url = $request->poster_url;
        $poster->movie()->associate($pelicula);
        $poster->save();

        $pelicula->tags()->sync($request->tags);
        $pelicula->actors()->sync($request->actors);


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
