<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;
use App\Director;
use App\Category;
use App\Commentary;
use App\Qualification;
use App\Tag;
use App\Year;
use App\User;
use App\Poster;
use App\Movie;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function indexAdmin()
    {
        $actores = Actor::all();
        $directores = Director::all();
        $categorias = Category::all();
        $comentarios = Commentary::all();
        $calificaciones = Qualification::all();
        $tags = Tag::all();
        $años = Year::all();
        $usuarios = User::all();
        $posters = Poster::all();
        $peliculas = Movie::all();

        return view('admin.index')
        ->with('actores',$actores)
        ->with('directores',$directores)
        ->with('categorias',$categorias)
        ->with('comentarios',$comentarios)
        ->with('calificaciones',$calificaciones)
        ->with('tags',$tags)
        ->with('años',$años)
        ->with('usuarios',$usuarios)
        ->with('posters',$posters)
        ->with('peliculas',$peliculas);
    }
}
