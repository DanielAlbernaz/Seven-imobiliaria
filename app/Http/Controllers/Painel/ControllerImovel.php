<?php

namespace App\Http\Controllers\Painel;

use App\Models\Form;
use App\Models\GalleriaImovel;
use App\Models\GalleriaProduto;
use App\Models\Imovel;
use App\Models\Produto;
use DateTime;
use Exception;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic;

class ControllerImovel extends Controller
{
    public function create(Request $request)
    {
        return view('painel.imovel.frmCadImovel');
    }

    public function store(Request $request)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $objImovel = new Imovel();
        try {
            if($request->image_file){
                $image_parts = explode(";base64,", $request->image_file);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);

                //Se não existir cria o diretorio
                $localStorage = 'imovel';
                $namePhoto = 'photo_' . time() . '.' . $image_type;
                try {
                    mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
                } catch (Exception $e) {

                }
                $img = ImageManagerStatic::make($image_base64);
                $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

                $request->image_file= $localStorage . "/" . $namePhoto;
            }

            $objImovel->title = $request->title;
            $objImovel->vazao = $request->vazao;
            $objImovel->motor = $request->motor;
            $objImovel->consumo = $request->consumo;
            $objImovel->abertura = $request->abertura;
            $objImovel->reservatorio = $request->reservatorio;
            $objImovel->text = $request->text;
            $objImovel->status = $request->status;
            $objImovel->begin_date = ($request->begin_date ? $request->begin_date  : date('Y-m-d H:i:s'));
            $objImovel->end_date = $request->end_date;
            $objImovel->imagem = $request->image_file;
            $objImovel->save();

            /**Log */
            createLog(auth()->user()->id, 'Cadastro', 'Imovel',  $objImovel->id, $_SERVER['REMOTE_ADDR']);

            $retorno = [
                'situacao' => 'success',
                'form' => 'cad',
                'redirect' => 'sistema/listar-imovel',
                'msg' => 'Cadastro salvo com sucesso!',
            ];
            return $retorno;
        } catch (Exception $e) {
            $retorno = [
                'situacao' => 'error',
                'form' => 'cad',
                'msg' => 'Erro ao salvar o cadastro!',
            ];
            return $retorno;
        }
 }

 function list(Request $request){
    $imoveis = Imovel::all();

    $imoveisList = array();
    for($i = 0; $i < count($imoveis); $i++){
        $imoveisList[$i]['ID'] = $imoveis[$i]->id;
        $imoveisList[$i]['TÍTULO'] = $imoveis[$i]->title;
        $imoveisList[$i]['IMAGEM'] = '<img src="'.session('URL_IMG'). $imoveis[$i]->imagem.'" style="width: 100px; overflow: hidden;" >' ;
        $imoveisList[$i]['INÍCIO EXIBIÇÃO'] = date_format(new DateTime($imoveis[$i]->begin_date), 'd/m/Y H:i:s');
        $imoveisList[$i]['FIM EXIBIÇÃO'] = ($imoveis[$i]->end_date ? date_format(new DateTime($imoveis[$i]->end_date), 'd/m/Y H:i:s') : '');
        $imoveisList[$i]['STATUS'] = $imoveis[$i]->status;
    }

    if(count($imoveis) == 0){
        $imoveisList[0]['ID'] = 0;
        $imoveisList[0]['TÍTULO'] = 0;
        $imoveisList[0]['IMAGEM'] = 0;
        $imoveisList[0]['INÍCIO EXIBIÇÃO'] = 0;
        $imoveisList[0]['FIM EXIBIÇÃO'] = 0;
        $imoveisList[0]['STATUS'] = 0;
        }
    return view('painel.imovel.frmListaImovel', compact('imoveisList'));
 }

 function status(Request $request){
    $imovel = imovel::find($request->id);

    if($imovel->status == 1){
        $imovel->status = 0;
    }else{
        $imovel->status = 1;
    }
    $imovel->save();

     /**Log */
     createLog(auth()->user()->id, 'Status', 'Imovel',  $imovel->id, $_SERVER['REMOTE_ADDR']);

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }

 function delete(Request $request){
    $imovel = Imovel::find($request->id);
    $galleriaImovel = GalleriaImovel::where('id_imovel', $imovel->id)->get();

    if(isset($galleriaImovel[0]['id'])){
        for($i = 0; $i < count($galleriaImovel); $i++){
            $this->destroyGalleria($galleriaImovel[$i]['id']);
        }

    }
    unlink(storage_path('\app\public/\/'.$imovel->imagem));
    $imovel->delete();

     /**Log */
     createLog(auth()->user()->id, 'Deletar', 'Imovel', $request->id, $_SERVER['REMOTE_ADDR']);

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }

 function destroyGalleria($id){
    $galleriaImovel = GalleriaImovel::find($id);

    unlink(storage_path('\app\public/\/'.$galleriaImovel->imagem));

    $galleriaImovel->delete();
 }

 function find(Request $request){
    $imovel = Imovel::find($request->id);
    $galleriaImovel = GalleriaImovel::where('id_imovel',  $request->id)->get();

     return view('painel.imovel.frmAltImovel', compact('imovel', 'galleriaImovel'));
  }

 function destroyImage($id){

    $galleriaImovel = GalleriaImovel::find($id);
    unlink(storage_path('\app\public/\/'.$galleriaImovel->imagem));
    $galleriaImovel->delete();

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
    exit;
  }

 function storeGalleria(Request $request){

    $files = $request->file;

    for($i = 0; $i < count($files); $i++){
        try {
            if($files[$i]){
                $extensaoPhoto = $files[$i]->extension();
                $img = ImageManagerStatic::make($files[$i]);

                //Se não existir cria o diretorio
                $localStorage = 'imovel/' . $request->id;
                $namePhoto = 'photo_' . time() . rand(1, 100) .  $i . '.' . $extensaoPhoto;
                try {
                    mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
                } catch (Exception $e) {

                }
                $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

                $imagem = $localStorage . "/" . $namePhoto;
            }

        }catch (Exception $e) {
        }

        $galleriaImovel = new GalleriaImovel();

        $galleriaImovel->id_imovel = $request->id;
        $galleriaImovel->imagem = $imagem;
        $galleriaImovel->save();
    }

    exit;
  }

  function edit(Request $request){

    try {
        if($request->image_file){
            $image_parts = explode(";base64,", $request->image_file);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);

            //Se não existir cria o diretorio
            $localStorage = 'imovel';
            $namePhoto = 'photo_' . time() . '.' . $image_type;
            try {
                mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
            } catch (Exception $e) {

            }
            $img = ImageManagerStatic::make($image_base64);
            $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

            $request->image_file= $localStorage . "/" . $namePhoto;
        }

        $objImovel = Imovel::find($request->id);
        $objImovel->title = $request->title;
        $objImovel->vazao = $request->vazao;
        $objImovel->motor = $request->motor;
        $objImovel->consumo = $request->consumo;
        $objImovel->abertura = $request->abertura;
        $objImovel->reservatorio = $request->reservatorio;
        $objImovel->text = $request->text;
        $objImovel->status = $request->status;
        $objImovel->begin_date = ($request->begin_date ? $request->begin_date  : date('Y-m-d H:i:s'));
        $objImovel->end_date = $request->end_date;
        $objImovel->imagem =  ($request->image_file ? $request->image_file : $request->imgOld);
        $objImovel->save();

        /**Log */
        createLog(auth()->user()->id, 'Alterar', 'Imovel', $objImovel->id, $_SERVER['REMOTE_ADDR']);

        $retorno = [
            'situacao' => 'success',
            'form' => 'alt',
            'redirect' => 'sistema/listar-imovel',
            'msg' => 'Alteração realizada com sucesso!',
        ];
        return $retorno;

    } catch (Exception $e) {
        $retorno = [
            'situacao' => 'error',
            'form' => 'alt',
            'redirect' => 'sistema/listar-imovel',
            'msg' => 'Erro ao realizar alteração!',
        ];
        return $retorno;
    }

 }

 static function inactivateDate()
 {
    Imovel::where('status', 1)
    ->where('end_date', '<=', Carbon::now()->toDateString())
    ->update(['status' => 0]);
 }
}
