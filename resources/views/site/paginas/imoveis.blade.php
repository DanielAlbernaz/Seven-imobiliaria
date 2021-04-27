@include('site.main.header')

<div class="mapa">
    <div id="map-container" class="homepage-map margin-bottom-0">

        <div id="map">
            <!-- map goes here -->
        </div>


    </div>
</div>

<div class="buscas-imovies">

    <div class="busc-local">
        <div class="text-local">
            <h1>BUSCAS</h1>
            <h1> LOCALIZAÇÃO</h1>
        </div>
    </div>

    <div class="form-buscas">
        <form id="frmBuscaPrincipal" method="POST"  action="busca-imoveis">
            @csrf
            <div class="for">
                <div class="for-top">
                    <input class="for-1" type="text" placeholder="Localização" id="localizacao" name="localizacao" value=""><br>
                    <input class="for-12" type="text" placeholder="Código imóvel" id="codigo_imovel" name="codigo_imovel" value="">
                    <input class="for-123" type="text" placeholder="Dormitorios" id="dormitorio" name="dormitorio" value="" >
                </div>
                <div class="for-bottom">

                </div>
            </div>
            <div class="foor">
                <div class="teste">
                    <select name="finalidade" id="finalidade" class="foor-finali" placeholder="Finalidade" >
                        <option value="">Todos</option>
                        <option value="Venda">Venda</option>
                        <option value="Aluguel">Aluguel</option>
                        <option value="Lancamento">Laçamento</option>
                    </select>
                    <select name="tipo" id="tipo" class="foor-tipo" placeholder="Tipo imóvel" >
                        <option value="">TIPO DE IMÓVEL</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Casa">Casa</option>
                        <option value="Casa Comercial">Casa Comercial</option>
                        <option value="Chácara">Chácara</option>
                        <option value="Cobertura">Cobertura</option>
                        <option value="Imovel Comercial">Imovel Comercial</option>
                        <option value="Kitinete">Kitinete</option>
                        <option value="Loja">Loja</option>
                        <option value="Lote">Lote</option>
                        <option value="Prédio">Prédio</option>
                        <option value="Salas">Salas</option>
                        <option value="Sobrado">Sobrado</option>
                        <option value="Chácara">Chácara</option>
                    </select>
                </div>

                <input class="foor-1" type="text" placeholder="Vaga garagem" id="vaga" name="vaga" value="">
                <input class="foor-2" type="text" placeholder="Suítes" id="suites" name="suites" value=""><br>
                <input class="foor-button" type="submit" value=" BUSCA" />
            </div>


        </form>
    </div>



</div>
<div class="encontrados">
    @if (count($imoveis) == 1)
        <h2>
            {{ count($imoveis)}} Imóvel Encontrado
        </h2>
    @endif
    @if (count($imoveis) > 1)
        <h2>
            {{ count($imoveis)}} Imóveis Encontrados
        </h2>
    @endif

</div>

<div class="container">

    @if (count($imoveis) > 0)

        @for ($i = 0; $i < count($imoveis); $i++)
        <article class="cont">

            <div class="cont-imagem">
                <a href="">
                    <img src="{{ urlImg() . $imoveis[$i]->imagem }}" alt="">
                </a>

                <div class="cont-aluguel">
                    <span class="span-tipo"> {{ $imoveis[$i]->finalidade }}</span>
                </div>
                @if ($imoveis[$i]->valor)
                    <div class="cont-valor">
                        <span style="color:white" class="span-valor"> R$ {{ number_format($imoveis[$i]->valor, 2, ',', '.')  }}</span>
                    </div>
                @endif

            </div>

            <div class="cont-casas">
                <a style="color:#707070" href="">
                    <h1> {{ $imoveis[$i]->tipo_imovel }} </h1>
                </a>
            </div>

            <div class="cont-local">
                <a style="color:#707070" href="">
                    <p><i class="fa fa-map-marker"></i> {{ $imoveis[$i]->endereco }}  </p>
                </a>
            </div>

            <div class="cont-quanti">
                <ul>
                    <li>
                        <p><i class="fa fa-arrows-alt"></i> {{ $imoveis[$i]->area_terreno ?  $imoveis[$i]->area_terreno : '0'  }} </p>
                    </li>
                    <li>
                        <p> <i class="fa fa-bed"></i> {{ $imoveis[$i]->dormitorio ?  $imoveis[$i]->dormitorio : '0'  }} Quarto</p>
                    </li>
                    <li>
                        <p> <i class="fa fa-car"></i> {{ $imoveis[$i]->vaga_garagem ?  $imoveis[$i]->vaga_garagem : '0'  }} vaga</p>
                    </li>
                </ul>
            </div>

        </article>
        @endfor

    @endif



</div>



@include('site.main.footer')
