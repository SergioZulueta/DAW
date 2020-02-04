<?php

namespace App\Http\Controllers;

use App\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas=Prueba::all();

        return view('pruebas', ['pruebas'=>$pruebas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anadirPrueba');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prueba = new Prueba();
        $prueba->titulo=request('titulo');
        $prueba->subtitulo=request('subtitulo');
        $prueba->telefono=request('telefono');
        $prueba->save();
        return redirect(route('pruebaIndex'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$prueba = DB::table('pruebas')->where("id", $id)->first();
        $prueba = Prueba::find($id);
        return view('showPruebas', [
           "prueba" => $prueba
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit(Prueba $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prueba $prueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$prueba = DB::table('pruebas')->where('id', '=', $id)->delete();

        $prueba = Prueba::find($id);
        $prueba->delete();

        return redirect(route('pruebaIndex'));
    }
}
