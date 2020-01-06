<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bodega;
use App\Vino;
use Illuminate\Support\Facades\DB;

class vinoController extends Controller
{

    public function detalleVino($id) {
        $vino = DB::table('vinos')->where("id", $id)->first();
        return view("detalleVino", [
            "vino" =>$vino
        ]);

    }

    public function borrarVino($id) {
        DB::table('vinos')->where('id', '=', $id)->delete();
        return redirect()->route('index');
    }

    public function storeVino(Request $request)
    {
        $vino = new Vino(
            array(
                'nombre'=>$request->get('nombre'),
                'descripcion'=>$request->get('descripcion'),
                'alcohol'=>$request->get('alcohol'),
                'tipo'=>$request->get('tipo'),
                'id_bodega'=>$request->get('id_bodega'),
                'año'=>$request->get('año')
            )
        );
        $vino->save();
        return redirect()->route('index');

    }

}
