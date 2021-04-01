<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerProduto as ControllersControllerProduto;
use App\Http\Controllers\Painel\ControllerBanner;
use App\Http\Controllers\Painel\ControllerProduto;
use App\Models\Banner;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;

class ControllerPrincipal extends Controller
{
    function index()
    {
        /**
         * Inativações
         */
        $imagem = new ImageManagerStatic();
        ControllerBanner::inactivateDate();

        $banner = Banner::where('status', 1)->whereDate('begin_date', '<=', Carbon::now()->toDateString())->get();

        return view('site.paginas.principal',  compact('banner'));
    }
}
