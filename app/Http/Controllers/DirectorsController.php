<?php

namespace App\Http\Controllers;
use App\Http\Requests\directorsRequests;
use Illuminate\Http\Request;
use App\Director;

class DirectorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        $directores = Director::all();
        return view('admin.directores.list',compact('directores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.directores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(directorsRequests $request)
    {
        $director = new Director;
        $director->firstname = $request->firstname;
        $director->lastname = $request->lastname;
        $director->biography = $request->biography;
        $director->save();
        return back()->with('info','Director '.$request->firstname.' '.$request->lastname.' guardado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $director = Director::find($id);
        return view('admin.directores.show',compact('director'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $director = Director::find($id);
        return view('admin.directores.edit',compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(directorsRequests $request, $id)
    {
        $director = Director::find($id);
        $director->fill($request->all());
        $director->save();
        return back()->with('info','Director '.$request->firstname.' '.$request->lastname.' editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director = Director::find($id);
        $director->delete();
        return back()->with('info','Director '.$director->firstname.' '.$director->lastname.' eliminado con exito!');
    }
}
