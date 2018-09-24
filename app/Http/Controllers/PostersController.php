<?php

namespace App\Http\Controllers;
use App\Poster;
use Illuminate\Http\Request;

class PostersController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $posters = Poster::all();
        return view('admin.posters.list',compact('posters'));
    }
}
