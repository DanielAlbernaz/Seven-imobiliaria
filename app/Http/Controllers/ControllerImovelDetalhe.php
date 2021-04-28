<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ControllerImovelDetalhe extends Controller
{
    function detalhe(Request $request)
    {
        $imovel = Imovel::find($request->id);

        return view('site.paginas.imovel', compact('imovel'));
    }
}
