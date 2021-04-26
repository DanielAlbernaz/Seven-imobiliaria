<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerImovel extends Controller
{
    function index()
    {
        return view('site.paginas.imoveis');
    }
    function detail(Request $request)
    {

        print_rpre($request->id);
        print_rpre($request->teste);exit;
        return view('site.paginas.imovel');
    }


}
