<?php

use App\Models\Empresa;
use App\Models\Log;
use App\Models\Telefone;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

/**
 * Classe Helpers funções de disponibilidade global
 *
 */

function print_rpre($dado)
{
        echo "<pre>";
        print_r($dado);
        echo "</pre>";
}

function createLog($user, $action, $form, $idData, $ip)
{
    $objLog = new Log();
    $objLog->usuario = $user;
    $objLog->acao = $action;
    $objLog->formulario = $form;
    $objLog->dado = $idData;
    $objLog->ip = $ip;
    $objLog->save();

}

function urlImg(){

    if($_SERVER["HTTP_HOST"] == '127.0.0.1:8000'){
        $urlImg = 'http://127.0.0.1:8000/storage/';
    }else{
        $urlImg =  'https://' . $_SERVER['HTTP_HOST'] . '\storage';
    }
    return $urlImg;
}

function exibirInfoEmpresa()
{
    $empresa = Empresa::find(1);

    return $empresa ;
}

function exibirTelefone()
{
    $telefones = Telefone::all();

    return $telefones;
}
function formatPhone($number)
{
    $number = str_replace('(', '', $number);
    $number = str_replace(')', '', $number);
    $number = str_replace(' ', '', $number);
    $number = str_replace('-', '', $number);

    return $number;
}

