<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bodega;
use App\Vino;
use Illuminate\Support\Facades\DB;

class bodegaController extends Controller
{
    public function bodegaController(){
        $bodegas = DB::table('bodegas')->get();
        return view("tablaBodegas", [
            "bodegas" => $bodegas
        ]);
    }


    public function store(Request $request)
    {
        $bodega = new Bodega(
            array(
                'nombre'=>$request->get('nombre'),
                'direccion'=>$request->get('direccion'),
                'email'=>$request->get('email'),
                'telefono'=>$request->get('telefono'),
                'contacto'=>$request->get('contacto'),
                'año'=>$request->get('año'),
                'restaurante'=>$request->get('restaurante'),
                'hotel'=>$request->get('hotel')
            )
        );
        $bodega->save();
        return redirect()->route('index');

    }

    public function detalleBodega($id) {
        $bodega = DB::table('bodegas')->where("id", $id)->first();
        $vinos = Vino::where("id_bodega","=",$id)->get();
        return view("detalleBodega", [
            "bodega" => $bodega,
            "vinos" => $vinos
        ]);
    }

    public function deleteBodega($id)
    {
        DB::table('bodegas')->where('id', '=', $id)->delete();

        return redirect()->route('index');
    }

    public function updateBodega(Request $request, $id)
    {
        $bodega = Bodega::find($id);

        $bodega->nombre= $request->input('nombre');
        $bodega->direccion= $request->input('direccion');
        $bodega->email= $request->input('email');
        $bodega->telefono= $request->input('telefono');
        $bodega->contacto= $request->input('contacto');
        $bodega->año= $request->input('año');
        $bodega->restaurante= $request->input('restaurante');
        $bodega->hotel= $request->input('hotel');

        $bodega->save();

        return redirect()->route('index');
    }
}
