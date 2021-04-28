@include('site.main.header')


    <div class="name-menu">

            <span class="">
                <h1>{{ $imovel->tipo_imovel }}</h1>
            </span>
                <span class="" >
                    <i class="fa fa-map-marker"></i> {{ $imovel->bairro }} - {{ $imovel->cidade_estado }}
                </span>

                <span class="" >
                    <i class="fa fa-home"></i> Código do Imóvel: {{ $imovel->codigo_imovel }}
                </span>

    </div>



    <div class="corpo">

        <div class="imovelcasa">

            <div class="imovel-container">

                <div class="col-lg-8 col-md-7" style=" width: 100%; ">
                    <div class="col-md-12">

                        <!-- Slider -->
                        <div class="property-slider default">
                            @for ($i = 0; $i < count($galeriaFotos); $i++)
                                <a    href="{{ urlImg() . $galeriaFotos[$i]->imagem }}" data-background-image="{{ urlImg() . $galeriaFotos[$i]->imagem }}" class="item mfp-gallery"></a>

                            @endfor
                        </div>

                        <!-- Slider Thumbs -->
                        <div  class="property-slider-nav">
                            @for ($i = 0; $i < count($galeriaFotos); $i++)
                                <div class="item" ><img style="width: 100%"   src="{{ urlImg() . $galeriaFotos[$i]->imagem }}"  height="100" class="fotoImgP"  alt=""></div>
                            @endfor


                    </div>
                    </div>
             </div>


                <div class="">
                    <div class="property-description">

                        <div class="blocoInformacoesImovel">
                            <!-- Details -->
                            <ul class="property-features margin-top-0">
                                <li><i class="flaticon-ruler"></i> Área útil: <span class="fontDestaque">48.00m²</span></li>

                                <li><i class="flaticon-ruler"></i> Área Total: <span class="fontDestaque">48.00m²</span></li>

                                <li><i class="flaticon-ruler"></i> Área Terreno: <span class="fontDestaque">0.00m²</span></li>

                                <li><i class="flaticon-ruler"></i> Área Privativa: <span class="fontDestaque">0.00m²</span></li>

                                <li><i class="flaticon-ruler"></i> Área Comum: <span class="fontDestaque">0.00m²</span></li>

                                <li><i class="flaticon-ruler"></i> Área Construída: <span class="fontDestaque">48.00m²</span></li>

                                <li><i class="im im-icon-Home-2" style="padding-left: 20px;"></i> <b>Código Imóvel: 3807</b></li>
                        </ul>
                        </div>
                </div>
                </div>
            </div>
            <div class="form-imovel">

                <div class="vecto">
                    <ul>
                        <li>
                            <dd>
                                <a href="">
                                    <img src="./images/hup.png" alt="">
                                </a>
                            </dd>
                        </li>
                        <li>
                            <dd>
                                <li>
                                    <dd>
                                        <img src="./images/Vecto.png" alt="">
                                    </dd>
                                </li>
                                <li>
                            </dd>
                        </li>
                        <li>
                            <dd>
                                <a href="">
                                    <img src="./images/share.png" alt="">
                                </a>
                            </dd>
                        </li>
                    </ul>
                </div>

                <div class="mensal-valor">
                    <div class="val">
                        <p> R$ </p>
                        <p> 500,00 </p>
                        <p> mensal </p>
                    </div>
                </div>

                <div class="contt">

                    <ul>
                        <li class="cont-estli">
                            <img src="./images/marcaa.png" alt="">
                        </li>

                        <li class="comt-est">
                            <dd>
                                <p> Tem Interesse </p>
                            </dd>
                            <dd>
                                <img src="" alt="">
                                <a href=""> (XX) XXXX-XXXX</a>

                            </dd>
                        </li>
                    </ul>

                </div>

                <div class="texto-formi">
                    <div class="txt-for">
                        <p> Lorem ipsum dolor sit amet, consectetur.
                            Lorem ipsum dolor sit amet, consectetur.
                            Lorem ipsum dolor sit amet, consectetur : 773636
                        </p>
                    </div>
                </div>

                <div class="formulario-compra">
                    <form action="">
                        <div class="form-compra">
                            <input class="compra-for" type="text" placeholder="Localizão" id="fname" name="name" value=""><br>
                            <input class="compra-for" type="text" placeholder="Telefone" id="fname" name="telefone" value="">
                            <input class="compra-for" type="text" placeholder="E-mail" id="lname" name="email" value=""><br>

                            <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>

                            <input class="butto-compra" type="submit" value="ENVIAR" />
                        </div>
                    </form>
                </div>
                <!--js-->
                <script src='https://www.google.com/recaptcha/api.js'></script>

            </div>


        </div>



    </div>


    <div class="descrition">

        <div class="descrit-imovel">
            <div class="descrit-descrit">

                <div class="text-principal">
                    <h1>Descrição</h1>
                </div>
                <div class="item-descrit">

                    <div class="frase-descrit">
                        <ul>
                            <li>
                                {!! $imovel->text!!}
                            </li>
                        </ul>
                    </div>
                </div>


            </div>


            <div class="security-descri">
                <div class="descrit-secur">

                    <div class="img-securit">
                        <img src="./images/wpf_security-checked.png" alt="">
                    </div>



                </div>
            </div>

        </div>

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
