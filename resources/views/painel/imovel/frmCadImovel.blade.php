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
</style>

<?php
use App\Models\Form;

Form::sb_FormBegin('Cadastro de Imóveis', 'validation');

Form::sb_FormText('Código Imóvel', 'codigo_imovel', 'Defina um código para o imóvel', '250px', '', true);

$opcaoFinalidade[] = "<option value=''  selected></option>";
$opcaoFinalidade[] = "<option value='Venda'  >Venda</option>";
$opcaoFinalidade[] .= "<option value='Aluguel' >Aluguel</option>";
$opcaoFinalidade[] .= "<option value='Lançamento' >Lançamento</option>";
Form::sb_FormSelect('Finalidade', 'finalidade', $opcaoFinalidade, '250px', true);

$opcaoTipo[] = "<option value=''  selected></option>";
$opcaoTipo[] = "<option value='Apartamento'  >Apartamento</option>";
$opcaoTipo[] .= "<option value='Casa' >Casa</option>";
$opcaoTipo[] .= "<option value='Casa Comercial' >Casa Comercial</option>";
$opcaoTipo[] .= "<option value='Chácara' >Chácara</option>";
$opcaoTipo[] .= "<option value='Cobertura' >Cobertura</option>";
$opcaoTipo[] .= "<option value='Flat' >Flat</option>";
$opcaoTipo[] .= "<option value='Imovel Comercial' >Imovel Comercial</option>";
$opcaoTipo[] .= "<option value='Kitinete' >Kitinete</option>";
$opcaoTipo[] .= "<option value='Loja' >Loja</option>";
$opcaoTipo[] .= "<option value='Lote' >Lote</option>";
$opcaoTipo[] .= "<option value='Prédio' >Prédio</option>";
$opcaoTipo[] .= "<option value='Salas' >Salas</option>";
$opcaoTipo[] .= "<option value='Sobrado' >Sobrado</option>";
$opcaoTipo[] .= "<option value='Chácara' >Chácara</option>";
Form::sb_FormSelect('Tipo imóvel', 'tipo_imovel', $opcaoTipo, '250px', true);

Form::sb_FormMoney('Valor', 'valor', 'Escreva o valor de venda ou aluguel', '250px','', false);
Form::sb_FormText('Endereço', 'endereco', 'Escreva o endereço do imóvel ex: Rua 25...', '800px', '', true);
Form::sb_FormText('Bairro', 'bairro', 'Escreva o bairo do imóvel  ex: Jardim America', '800px', '', true);
Form::sb_FormText('Cidade / Estado', 'cidade_estado', 'Escreva  a cidade / estado ex: Goiânia - GO', '800px', '', true);
Form::sb_FormText('Cep', 'cep', 'Escreva  CEP da rua do imóvel ex: 74-255-470', '250px', '', false);

Form::sb_FormTextHtml('Descrição produto', 'text', 'Escre uma descrição', '', false);

Form::sb_FormNumber('Dormitorios', 'dormitorio', 'Defina a quantidade dormitorios', '200px', '', false);
Form::sb_FormNumber('Suítes', 'suites', 'Defina a quantidade suítes', '200px', '', false);
Form::sb_FormNumber('Vaga garagem', 'vaga_garagem', 'Defina a quantidade de garagens', '200px', '', false);
Form::sb_FormText('Área útil', 'area_util', 'Defina um valor para área útil ex: 360m²', '200px', '', false);
Form::sb_FormText('Área terreno', 'area_terreno', 'Defina um valor para área terreno ex: 360m²', '200px', '', false);
Form::sb_FormText('Área comum', 'area_comum', 'Defina um valor para área comum ex: 360m²', '200px', '', false);
Form::sb_FormText('Área total', 'area_total', 'Defina um valor para área total ex: 360m²', '200px', '', false);
Form::sb_FormText('Área privativa', 'area_privativa', 'Defina um valor para área privativa ex: 360m²', '200px', '', false);
Form::sb_FormText('Área útil', 'area_construida', 'Defina um valor para área construida ex: 360m²', '200px', '', false);

Form::sb_FormText('Latitude', 'latitude', 'Defina uma rota para desenhar o caminho no mapa', '200px', '', false);
Form::sb_FormText('Longitude', 'longitude', 'Definauma rota para desenhar o caminho no mapa²', '200px', '', false);

Form::sb_FormCropImage('Imagem destaque', '', true);

$opcaoStatus[] = "<option value='1'  selected>Ativo</option>";
$opcaoStatus[] .= "<option value='0' >Inativo</option>";
Form::sb_FormSelect('Status', 'status', $opcaoStatus, '250px', true);

Form::sb_FormDate('Data início exibição', 'begin_date', 'Data inícial que o conteúdo será exibido', '289px', '', false);

Form::sb_FormDate('Data final exibição', 'end_date', 'Data final máxima que o conteúdo será exibido', '289px', '', false);

Form::sb_FormSubmit('Salvar', 'sistema/salvar-imovel', '');

Form::sb_FormEnd();




?>



<script>
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
            aspectRatio: 777 / 600,
            viewMode: 1,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 777,
            height: 600,
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


