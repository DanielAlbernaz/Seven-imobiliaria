<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Institucional;
use Illuminate\Http\Request;

class ControllerInstitucional extends Controller
{
    function index(){

        $institucional = Institucional::find(1);

        return view('site.paginas.institucional', compact('institucional'));
    }
}
