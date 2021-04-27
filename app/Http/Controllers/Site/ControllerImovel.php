<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Imovel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerImovel extends Controller
{
    function index()
    {
        $imoveis = Imovel::all();

        return view('site.paginas.imoveis', compact('imoveis'));
    }
    function detail(Request $request)
    {

        return view('site.paginas.imovel');
    }
    function busca(Request $request)
    {

        $query = DB::table('imoveis')->where('status', 1);

        if($request->tipo){
            $query->where('tipo_imovel', $request->tipo);
        }
        if($request->finalidade){
            $query->where('tipo_imovel', $request->finalidade);
        }
        if($request->localizacao){
            $query->where('endereco', 'like', '%' . $request->localizacao . '%');
        }

        $imoveis = $query->get();



        // if($request->finalidade == 'todos'){
        //     $imoveis = Imovel::where('tipo_imovel', $request->tipo)->where('endereco', 'like', '%' . $request->localizacao . '%')->get();

        // }elseif($request->localizacao){
        //     $imoveis = Imovel::where('tipo_imovel', $request->tipo)->where('finalidade', $request->finalidade)->where('endereco', 'like', '%' . $request->localizacao . '%')->get();
        // }elseif(!$request->localizacao && !$request->tipo){
        //     $imoveis = Imovel::where('finalidade', $request->finalidade)->get();
        // }else{
        //     $imoveis = Imovel::where('tipo_imovel', $request->tipo)->where('finalidade', $request->finalidade)->get();
        // }

        return view('site.paginas.imoveis', compact('imoveis'));
    }
    function buscar(Request $request)
    {
        print_rpre($request->all());exit;
        if($request->finalidade == 'todos'){
            $imoveis = Imovel::where('tipo_imovel', $request->tipo)->where('endereco', 'like', '%' . $request->localizacao . '%')->get();
        }elseif($request->localizacao){
            $imoveis = Imovel::where('tipo_imovel', $request->tipo)->where('finalidade', $request->finalidade)->where('endereco', 'like', '%' . $request->localizacao . '%')->get();
        }elseif(!$request->localizacao && !$request->tipo){
            $imoveis = Imovel::where('finalidade', $request->finalidade)->get();
        }else{
            $imoveis = Imovel::where('tipo_imovel', $request->tipo)->where('finalidade', $request->finalidade)->get();
        }

        return view('site.paginas.imoveis', compact('imoveis'));
    }



}
