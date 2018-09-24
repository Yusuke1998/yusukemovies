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


class GeneralController extends Controller
{

        public function indexPublic()
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
        $peliculas4 = Movie::orderBy('year_id','DESC')->limit(4)->get();
        $peliculas8 = Movie::orderBy('year_id','DESC')->limit(8)->get();


        return view('index')
        ->with('actores',$actores)
        ->with('directores',$directores)
        ->with('categorias',$categorias)
        ->with('comentarios',$comentarios)
        ->with('calificaciones',$calificaciones)
        ->with('tags',$tags)
        ->with('años',$años)
        ->with('usuarios',$usuarios)
        ->with('posters',$posters)
        ->with('peliculas',$peliculas)
        ->with('peliculas4',$peliculas4)
        ->with('peliculas8',$peliculas8);
    }

    // solo peliculas

    public function peliculas(){
        $peliculas = Movie::all();
        
        return view('peliculas')->with('peliculas',$peliculas);
    }

    public function peliculasid($id){
        $comentarios = Commentary::all();
        $pelicula = Movie::find($id);

        return view('pelicula')
        ->with('pelicula',$pelicula)
        ->with('comentarios',$comentarios);
    }

    // solo peliculas

    // solo categorias

    public function categorias(){
        $categorias = Category::orderBy('name')->get();

        return view('categorias')->with('categorias',$categorias);
    }

    public function categoriasid($id){
        $categoria = Category::find($id);

        return "Hola ".$categoria->name;
    }

    public function categoria_año(Request $request){
      
        $pelicula = Movie::where('category_id','=',$request->categories)->where('year_id','=',$request->years)->get();
        
        return $pelicula;
    }
    // solo categorias

    // solo actores

    public function actorid($id){
        $actor = Actor::find($id);

        return "Hola ".$actor->firstname;
    }
    public function actores(){
        $actores = Actor::all();

        return view('actores')->with('actores',$actores);
    }

    // solo actores

    // solo directors

    public function directores(){
        $directores = Director::all();

        return view('directores')->with('directores',$directores);;        
    }

    public function directorid($id){
        $director = Director::find($id);

        return "Hola ".$director->firstname;        
    }

    // solo directors


    public function sugerencias(){
        return view('sugerencias');
    }

    public function contacto(){
        return view('contacto');
    }
   
    public function pedidos(){
        return view('pedidos');        
    }
}
