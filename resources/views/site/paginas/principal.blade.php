@include('site.main.header')

    {{-- <div class="fold">
        <div class="fund">
            <img src="./images/fold.png" alt="">
        </div>
    </div> --}}

    <!-- BANNER'S-->
    @if (count($banner) > 0)
    <div class="slider-area slider-one-style banner">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                    @for ($i = 0; $i < count($banner); $i++)
                        <a href="{{ $banner[$i]->url ? $banner[$i]->url : '' }}"  target="{{$banner[$i]->target_page == 1 ?"_self":"_blank"}}" title="{{ $banner[$i]->title }}">
                            <img src="{{ urlImg() .  $banner[$i]-> imagem}}" alt="{{ $banner[$i]->title }}" />
                        </a>
                    @endfor
            </div>
        </div>
    </div>
@endif
    <!-- Formulario de Pesquisa/Filtro -->
<div class="filtro-busca">
    <div class="buscas">
        <div class="filterbusca">
            <div class="imoveis">

                <form id="frmBuscaPrincipal" method="POST"  action="busca-imoveis" >
                    @csrf
                <!-- Type -->
                    <div class="search-type">
                        <label class="todos active" onclick="todos()"><input class="first-tab" name="finalidade" value="todos" id="finalidade" checked="checked" type="radio">Todos os imóveis</label>
                        <label class="venda" onclick="venda()"><input name="finalidade" id="finalidade" value="Venda" type="radio">Venda</label>
                        <label class="aluguel" onclick="aluguel()"><input name="finalidade" id="finalidade" value="Aluguel" type="radio">Aluguel</label>
                        <div class="search-type-arrow"></div>
                    </div>

                    <div class="locali-tipo">
                            <div class="localbusc">
                                <input class="localit" type="text" id="localizacao" name="localizacao" placeholder="LOCALIZAÇÃO">
                            </div>
                            <div class="imovelbusc">
                                <select name="tipo" id="tipo" class="tipoimo" placeholder="Tipo Imóvel" >
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
                            <div class="butt">
                                <button class="filbusc" type="submit" style="cursor: pointer" > Busca </button>
                            </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="espace">
    <label  class="label-imagem" for="">
        <li>
            <img src="./images/vector.png" alt="">
        </li>
        <li>
            <p> Ordenado por:</p>
        </li>
    </label>

    <label for="">
        <a href="{{ route('principal', ['order' => 'id']) }}"> MAIS RECENTES </a>
    </label>

    <label for="">
        <a href="{{ route('principal', ['order' => 'codigo_imovel']) }}"> POPULARES </a>
    </label>

    <label for="">
        <a href="{{ route('principal', ['order' => 'valor-max']) }}"> PREÇO (ALTO PARA BAIXO) </a>
    </label>

    <label for="">
        <a  href="{{ route('principal', ['order' => 'valor-min']) }}"> PREÇO (BAIXO PARA ALTO) </a>
    </label>

    </li>
</div>

<div class="encontrados">
    <h2>
       {{ count($imoveis)}} Imóveis Encontrados
    </h2>
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
                        <p> <i class="fa fa-car"></i> {{ $imoveis[$i]->vaga ?  $imoveis[$i]->vaga : '0'  }} vaga</p>
                    </li>
                </ul>
            </div>

        </article>
        @endfor

    @endif


</div>

<div class="mais-imoveis">
    <ul>
        <li>
            <img src="./images/undo.png" alt="">
        </li>
        <li>
            <a href="/imoveis">Ver Mais</a>
        </li>
    </ul>
</div>

<div class="mapa">
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244584.17760433958!2d-49.44435535229793!3d-16.695499894685117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef6bd58d80867%3A0xef692bad20d2678e!2zR29pw6JuaWEsIEdP!5e0!3m2!1spt-BR!2sbr!4v1618516401539!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}

<div id="map-container" class="homepage-map margin-bottom-0">

    <div id="map">
        <!-- map goes here -->
    </div>


</div>
</div>

<div class="encontrados">
    <h2>
       Imovies recentes
    </h2>
</div>

<div class="container">

    @if (count($imoveisRecentes) > 0)

        @for ($i = 0; $i < count($imoveisRecentes); $i++)
        <article class="cont">

            <div class="cont-imagem">
                <a href="">
                    <img src="{{ urlImg() . $imoveisRecentes[$i]->imagem }}" alt="">
                </a>

                <div class="cont-aluguel">
                    <span class="span-tipo"> {{ $imoveisRecentes[$i]->finalidade }}</span>
                </div>
                @if ($imoveisRecentes[$i]->valor)
                    <div class="cont-valor">
                        <span style="color:white" class="span-valor"> R$ {{ number_format($imoveisRecentes[$i]->valor, 2, ',', '.')  }}</span>
                    </div>
                @endif

            </div>

            <div class="cont-casas">
                <a style="color:#707070" href="">
                    <h1> {{ $imoveisRecentes[$i]->tipo_imovel }} </h1>
                </a>
            </div>

            <div class="cont-local">
                <a style="color:#707070" href="">
                    <p><i class="fa fa-map-marker"></i> {{ $imoveisRecentes[$i]->endereco }}  </p>
                </a>
            </div>

            <div class="cont-quanti">
                <ul>
                    <li>
                        <p><i class="fa fa-arrows-alt"></i> {{ $imoveisRecentes[$i]->area_terreno ?  $imoveisRecentes[$i]->area_terreno : '0'  }} </p>
                    </li>
                    <li>
                        <p> <i class="fa fa-bed"></i> {{ $imoveisRecentes[$i]->dormitorio ?  $imoveisRecentes[$i]->dormitorio : '0'  }} Quarto</p>
                    </li>
                    <li>
                        <p> <i class="fa fa-car"></i> {{ $imoveisRecentes[$i]->vaga ?  $imoveisRecentes[$i]->vaga : '0'  }} vaga</p>
                    </li>
                </ul>
            </div>

        </article>
        @endfor

    @endif



</div>

@include('site.main.footer')
