<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerProduto as ControllersControllerProduto;
use App\Http\Controllers\Painel\ControllerBanner;
use App\Http\Controllers\Painel\ControllerImovel;
use App\Http\Controllers\Painel\ControllerProduto;
use App\Models\Banner;
use App\Models\Empresa;
use App\Models\Imovel;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;

class ControllerPrincipal extends Controller
{
    function index(Request $request)
    {
        /**
         * Inativações
         */
        $imagem = new ImageManagerStatic();
        ControllerBanner::inactivateDate();
        ControllerImovel::inactivateDate();


        /**Busca imóveis */
        if($request->order == 'id'){
            $imoveis = Imovel::where('status', 1)->orderBy($request->order, 'Desc')->get();
        }if($request->order == 'codigo_imovel'){
            $imoveis = Imovel::where('status', 1)->orderBy($request->order, 'Desc')->get();
        }if($request->order == 'valor-max'){
            $imoveis = Imovel::where('status', 1)->orderByDesc('valor')->get();
        }if($request->order == 'valor-min'){
            $imoveis = Imovel::where('status', 1)->orderBy('valor', 'Asc')->get();
        }if(!$request->order){
            $imoveis = Imovel::where('status', 1)->orderByDesc('id')->get();
        }

        $imoveisRecentes = Imovel::where('status', 1)->orderByDesc('id')->get();

        $banner = Banner::where('status', 1)->whereDate('begin_date', '<=', Carbon::now()->toDateString())->get();

        $empresa = Empresa::all();

        return view('site.paginas.principal',  compact('banner', 'imoveis', 'imoveisRecentes', 'empresa'));
    }
}
