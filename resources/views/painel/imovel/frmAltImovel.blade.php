@include('painel/header')

<style>
   img {
       display: block;
       max-width: 100%;
   }
   .preview {
       overflow: hidden;
       width: 160px;
       height: 160px;
       margin: 10px;
       border:  1px solid black;
   }
   #buttonGalleria{
    opacity: 0;
}
   #imagemGalleria:hover #buttonGalleria{
    opacity: 1;
    transition-duration: 5s;
}
</style>

<?php
use App\Models\Form;

Form::sb_FormBegin('Alterar imóvel', 'validation');

Form::sb_FormText('Código Imóvel', 'codigo_imovel', 'Defina um código para o imóvel', '250px', $imovel->codigo_imovel, true);

$opcaoFinalidade[] = "<option value=''  selected></option>";
$opcaoFinalidade[] = "<option value='Venda'   ".($imovel->finalidade == 'Venda' ? 'selected="selected" ' : '').">Venda</option>";
$opcaoFinalidade[] .= "<option value='Aluguel'  ".($imovel->finalidade == 'Aluguel' ? 'selected="selected" ' : '').">Aluguel</option>";
$opcaoFinalidade[] .= "<option value='Lançamento'  ".($imovel->finalidade == 'Lançamento' ? 'selected="selected" ' : '').">Lançamento</option>";
Form::sb_FormSelect('Finalidade', 'finalidade', $opcaoFinalidade, '250px', true);

$opcaoTipo[] = "<option value=''  ></option>";
$opcaoTipo[] = "<option value='Apartamento' ".($imovel->tipo_imovel == 'Apartamento' ? 'selected="selected" ' : '')." >Apartamento</option>";
$opcaoTipo[] .= "<option value='Casa' ".($imovel->tipo_imovel == 'Casa' ? 'selected="selected" ' : '').">Casa</option>";
$opcaoTipo[] .= "<option value='Casa Comercial' ".($imovel->tipo_imovel == 'Casa Comercial' ? 'selected="selected" ' : '').">Casa Comercial</option>";
$opcaoTipo[] .= "<option value='Chácara' ".($imovel->tipo_imovel == 'Chácara' ? 'selected="selected" ' : '').">Chácara</option>";
$opcaoTipo[] .= "<option value='Cobertura'".($imovel->tipo_imovel == 'Cobertura' ? 'selected="selected" ' : '')." >Cobertura</option>";
$opcaoTipo[] .= "<option value='Flat' ".($imovel->tipo_imovel == 'Flat' ? 'selected="selected" ' : '').">Flat</option>";
$opcaoTipo[] .= "<option value='Imovel Comercial' ".($imovel->tipo_imovel == 'Imovel Comercial' ? 'selected="selected" ' : '').">Imovel Comercial</option>";
$opcaoTipo[] .= "<option value='Kitinete' ".($imovel->tipo_imovel == 'Kitinete' ? 'selected="selected" ' : '').">Kitinete</option>";
$opcaoTipo[] .= "<option value='Loja' ".($imovel->tipo_imovel == 'Loja' ? 'selected="selected" ' : '').">Loja</option>";
$opcaoTipo[] .= "<option value='Lote' ".($imovel->tipo_imovel == 'Lote' ? 'selected="selected" ' : '').">Lote</option>";
$opcaoTipo[] .= "<option value='Prédio' ".($imovel->tipo_imovel == 'Prédio' ? 'selected="selected" ' : '').">Prédio</option>";
$opcaoTipo[] .= "<option value='Salas' ".($imovel->tipo_imovel == 'Salas' ? 'selected="selected" ' : '').">Salas</option>";
$opcaoTipo[] .= "<option value='Sobrado' ".($imovel->tipo_imovel == 'Sobrado' ? 'selected="selected" ' : '').">Sobrado</option>";
Form::sb_FormSelect('Tipo imóvel', 'tipo_imovel', $opcaoTipo, '250px', true);

Form::sb_FormMoney('Valor', 'valor', 'Escreva o valor de venda ou aluguel', '250px', number_format($imovel->valor, 2, ',', '.'), false);
Form::sb_FormText('Endereço', 'endereco', 'Escreva o endereço do imóvel ex: Rua 25...', '800px', $imovel->endereco, true);
Form::sb_FormText('Bairro', 'bairro', 'Escreva o bairo do imóvel  ex: Jardim America', '800px', $imovel->bairro, true);
Form::sb_FormText('Cidade / Estado', 'cidade_estado', 'Escreva  a cidade / estado ex: Goiânia - GO', '800px', $imovel->cidade_estado, true);
Form::sb_FormText('Cep', 'cep', 'Escreva  CEP da rua do imóvel ex: 74-255-470', '250px', $imovel->cep, false);

Form::sb_FormTextHtml('Descrição produto', 'text', 'Escre uma descrição', $imovel->text, false);

Form::sb_FormNumber('Dormitorios', 'dormitorio', 'Defina a quantidade dormitorios', '200px', $imovel->dormitorio, false);
Form::sb_FormNumber('Suítes', 'suites', 'Defina a quantidade suítes', '200px', $imovel->suites, false);
Form::sb_FormNumber('Vaga garagem', 'vaga_garagem', 'Defina a quantidade de garagens', '200px', $imovel->vaga_garagem, false);
Form::sb_FormText('Área útil', 'area_util', 'Defina um valor para área útil ex: 360m²', '200px', $imovel->area_util, false);
Form::sb_FormText('Área terreno', 'area_terreno', 'Defina um valor para área terreno ex: 360m²', '200px', $imovel->area_terreno, false);
Form::sb_FormText('Área comum', 'area_comum', 'Defina um valor para área comum ex: 360m²', '200px', $imovel->area_comum, false);
Form::sb_FormText('Área total', 'area_total', 'Defina um valor para área total ex: 360m²', '200px', $imovel->area_total, false);
Form::sb_FormText('Área privativa', 'area_privativa', 'Defina um valor para área privativa ex: 360m²', '200px', $imovel->area_privativa, false);
Form::sb_FormText('Área útil', 'area_construida', 'Defina um valor para área construida ex: 360m²', '200px', $imovel->area_construida, false);
Form::sb_FormText('Latitude', 'latitude', 'Defina uma rota para desenhar o caminho no mapa', '200px', $imovel->latitude, false);
Form::sb_FormText('Longitude', 'longitude', 'Definauma rota para desenhar o caminho no mapa²', '200px', $imovel->longitude, false);



Form::sb_FormCropImage('Imagem produto', $imovel->imagem, false);

Form::sb_FormGalleria($galleriaImovel, 'sistema/deletar-imovel-imagem');

$opcaoAba[] = "<option value='1'  ".($imovel->status == 1 ? 'selected="selected" ' : '')." >Ativo</option>";
$opcaoAba[] .= "<option value='2'  ".($imovel->status == 0 ? 'selected="selected" ' : '')." >Inativo</option>";
Form::sb_FormSelect('Status', 'status', $opcaoAba, '250px', true);

Form::sb_FormDate('Data início exibição', 'begin_date', 'Data inícial que o conteúdo será exibido', '289px', str_replace(' ','T',$imovel->begin_date) , false);

Form::sb_FormDate('Data final exibição', 'end_date', 'Data final máxima que o conteúdo será exibido', '289px',str_replace(' ','T',$imovel->end_date), false);


Form::sb_FormSubmit('Salvar', '', 'sistema/edit-imovel');

Form::sb_FormHidden('id', $imovel->id);
Form::sb_FormHidden('imgOld', $imovel->imagem);

Form::sb_FormEnd();


?>



<script>
    Dropzone.options.myDropzone= {
    url: 'http://127.0.0.1:8000/sistema/salvar-galleria/' + '<?php print $imovel->id; ?>',
    //autoProcessQueue: false,
    uploadMultiple: true,
    addRemoveLinks:false,
    dictDefaultMessage: "Arraste ou clique para importar suas fotos.",
    parallelUploads: 10,
    maxFiles: 10,
    maxFilesize: 55,
    acceptedFiles: 'image/*',
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}


   var bs_modal = $('#modal');
   var image = document.getElementById('image');
   var cropper,reader,file;

   $("body").on("change", ".image", function(e) {
       var files = e.target.files;
       var done = function(url) {
           image.src = url;
           bs_modal.modal('show');
       };

       if (files && files.length > 0) {
           file = files[0];

           if (URL) {
               done(URL.createObjectURL(file));
           } else if (FileReader) {
               reader = new FileReader();
               reader.onload = function(e) {
                   done(reader.result);
               };
               reader.readAsDataURL(file);
           }
       }
   });

   bs_modal.on('shown.bs.modal', function() {
       cropper = new Cropper(image, {
           aspectRatio: 800 / 800,
           viewMode: 1,
           preview: '.preview'
       });
   }).on('hidden.bs.modal', function() {
       cropper.destroy();
       cropper = null;
   });

   $("#crop").click(function() {
       canvas = cropper.getCroppedCanvas({
           width: 800,
           height: 800,
       });

       canvas.toBlob(function(blob) {
           url = URL.createObjectURL(blob);
           var reader = new FileReader();
           reader.readAsDataURL(blob);
           reader.onloadend = function() {
           var base64data = reader.result;

           $('#image_file').val(base64data);
           bs_modal.modal('hide');
           };
       });
   });

</script>


@include('painel/footer')
