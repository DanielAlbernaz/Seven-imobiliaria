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
        if($request->finalidade == 'Venda' || $request->finalidade == 'Aluguel' ){
            $query->where('finalidade', $request->finalidade);
        }
        if($request->localizacao){
            $query->where('endereco', 'like', '%' . $request->localizacao . '%');
        }
        if($request->codigo_imovel ){
            $query->where('codigo_imovel', $request->codigo_imovel);
        }
        if($request->dormitorio == 'Venda' ){
            $query->where('dormitorio', $request->dormitorio);
        }
        if($request->vaga ){
            $query->where('vaga_garagem', $request->vaga);
        }
        if($request->suites ){
            $query->where('suites', $request->suites);
        }

        $imoveis = $query->get();

        return view('site.paginas.imoveis', compact('imoveis'));
    }

    function listarLocalizacao(Request $request)
    {
        $imoveis = Imovel::all();

        $resposta['situacao'] = 'sucess';
        $resposta['imoveis'] = $imoveis;
        return $resposta;
    }



}
