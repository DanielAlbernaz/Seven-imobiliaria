@include('site.main.header')

    <div class="fold">
        <div class="fund">
            <img src="./images/fold.png" alt="">
        </div>
    </div>

    <!-- Formulario de Pesquisa/Filtro -->
<div class="filtro-busca">
    <div class="buscas">
        <div class="filterbusca">
            <div class="imoveis">

                <form>
                <!-- Type -->
                    <div class="search-type">
                        <label class="todos active" onclick="todos()"><input class="first-tab" name="tab" checked="checked" type="radio">Todos os imóveis</label>
                        <label class="venda" onclick="venda()"><input name="tab" type="radio">Venda</label>
                        <label class="aluguel" onclick="aluguel()"><input name="tab" type="radio">Aluguel</label>
                        <div class="search-type-arrow"></div>
                    </div>

                    <div class="locali-tipo">
                            <div class="localbusc">
                                <input class="localit" type="text" name="Localizacao" placeholder="LOCALIZAÇÃO">
                            </div>
                            <div class="imovelbusc">
                                <select name="select" class="tipoimo" placeholder="Tipo Imóvel" form="carform">
                                    <option value="tipo">TIPO DE IMÓVEL</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Ap">Apartamento</option>
                                    <option value="Loft">Loft</option>
                                </select>
                            </div>
                            <div class="butt">
                                <button class="filbusc"> Busca </button>
                            </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="espace">
    <label for="">
        <img src="./images/vector.png" alt="">
    </label>
    <li>
        <p>Ordenado por:</p>
        <a href=""> MAIS RECENTEPOPULARESPREÇO (ALTO PARA BAIXO)PREÇO (BAIXO PARA ALTO)
        </a>
    </li>
    <label for="" class="labeul">
        <ul>
            <li>
                <a href="">
                    <img src="./images/view_module.png" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="./images/view_list.png" alt="">
                </a>
            </li>
        </ul>
    </label>
</div>

<div class="encontrados">
    <h2>
       150 Imoveis Encontrados
    </h2>
</div>

<div class="container">

    <article class="cont">

        <div class="cont-imagem">

            <img src="./images/rectangle.png" alt="">

            <div class="cont-aluguel">
                <span class="span-tipo"> Aluguel </span>
            </div>
            <div class="cont-valor">
                <span class="span-valor"> R$ 500,00</span>
            </div>
        </div>

        <div class="cont-casas">
           <h1> Casas </h1>
        </div>

        <div class="cont-local">
            <p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur  </p>
        </div>

        <div class="cont-quanti">
            <ul>
                <li>
                    <p><i class="fa fa-arrows-alt"></i> 480.00m</p>
                </li>
                <li>
                    <p> <i class="fa fa-bed"></i> 0 Quarto</p>
                </li>
                <li>
                    <p> <i class="fa fa-car"></i> 0 vaga</p>
                </li>
            </ul>
        </div>

    </article>

    <article class="cont">

        <div class="cont-imagem">

            <img src="./images/rectangle.png" alt="">

            <div class="cont-aluguel">
                <span class="span-tipo"> Aluguel </span>
            </div>
            <div class="cont-valor">
                <span class="span-valor"> R$ 500,00</span>
            </div>
        </div>

        <div class="cont-casas">
           <h1> Casas </h1>
        </div>

        <div class="cont-local">
            <p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur  </p>
        </div>

        <div class="cont-quanti">
            <ul>
                <li>
                    <p><i class="fa fa-arrows-alt"></i> 480.00m</p>
                </li>
                <li>
                    <p> <i class="fa fa-bed"></i> 0 Quarto</p>
                </li>
                <li>
                    <p> <i class="fa fa-car"></i> 0 vaga</p>
                </li>
            </ul>
        </div>

    </article>

    <article class="cont">

        <div class="cont-imagem">

            <img src="./images/rectangle.png" alt="">

            <div class="cont-aluguel">
                <span class="span-tipo"> Aluguel </span>
            </div>
            <div class="cont-valor">
                <span class="span-valor"> R$ 500,00</span>
            </div>
        </div>

        <div class="cont-casas">
           <h1> Casas </h1>
        </div>

        <div class="cont-local">
            <p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur  </p>
        </div>

        <div class="cont-quanti">
            <ul>
                <li>
                    <p><i class="fa fa-arrows-alt"></i> 480.00m</p>
                </li>
                <li>
                    <p> <i class="fa fa-bed"></i> 0 Quarto</p>
                </li>
                <li>
                    <p> <i class="fa fa-car"></i> 0 vaga</p>
                </li>
            </ul>
        </div>

    </article>
</div>

<div class="mais-imoveis">
    <ul>
        <li>
            <img src="./images/undo.png" alt="">
        </li>
        <li>
            <a href="">Ver Mais</a>
        </li>
    </ul>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244584.17760433958!2d-49.44435535229793!3d-16.695499894685117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef6bd58d80867%3A0xef692bad20d2678e!2zR29pw6JuaWEsIEdP!5e0!3m2!1spt-BR!2sbr!4v1618516401539!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="encontrados">
    <h2>
       Imovies recentes
    </h2>
</div>

<div class="container">

    <article class="cont">

        <div class="cont-imagem">

            <img src="./images/rectangle.png" alt="">

            <div class="cont-aluguel">
                <span class="span-tipo"> Aluguel </span>
            </div>
            <div class="cont-valor">
                <span class="span-valor"> R$ 500,00</span>
            </div>
        </div>

        <div class="cont-casas">
           <h1> Casas </h1>
        </div>

        <div class="cont-local">
            <p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur  </p>
        </div>

        <div class="cont-quanti">
            <ul>
                <li>
                    <p><i class="fa fa-arrows-alt"></i> 480.00m</p>
                </li>
                <li>
                    <p> <i class="fa fa-bed"></i> 0 Quarto</p>
                </li>
                <li>
                    <p> <i class="fa fa-car"></i> 0 vaga</p>
                </li>
            </ul>
        </div>

    </article>

    <article class="cont">

        <div class="cont-imagem">

            <img src="./images/rectangle.png" alt="">

            <div class="cont-aluguel">
                <span class="span-tipo"> Aluguel </span>
            </div>
            <div class="cont-valor">
                <span class="span-valor"> R$ 500,00</span>
            </div>
        </div>

        <div class="cont-casas">
           <h1> Casas </h1>
        </div>

        <div class="cont-local">
            <p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur  </p>
        </div>

        <div class="cont-quanti">
            <ul>
                <li>
                    <p><i class="fa fa-arrows-alt"></i> 480.00m</p>
                </li>
                <li>
                    <p> <i class="fa fa-bed"></i> 0 Quarto</p>
                </li>
                <li>
                    <p> <i class="fa fa-car"></i> 0 vaga</p>
                </li>
            </ul>
        </div>

    </article>

    <article class="cont">

        <div class="cont-imagem">

            <img src="./images/rectangle.png" alt="">

            <div class="cont-aluguel">
                <span class="span-tipo"> Aluguel </span>
            </div>
            <div class="cont-valor">
                <span class="span-valor"> R$ 500,00</span>
            </div>
        </div>

        <div class="cont-casas">
           <h1> Casas </h1>
        </div>

        <div class="cont-local">
            <p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur  </p>
        </div>

        <div class="cont-quanti">
            <ul>
                <li>
                    <p><i class="fa fa-arrows-alt"></i> 480.00m</p>
                </li>
                <li>
                    <p> <i class="fa fa-bed"></i> 0 Quarto</p>
                </li>
                <li>
                    <p> <i class="fa fa-car"></i> 0 vaga</p>
                </li>
            </ul>
        </div>

    </article>
</div>

@include('site.main.footer')
