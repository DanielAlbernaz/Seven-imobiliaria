@include('site.main.header')
<?php
    $empresa = exibirInfoEmpresa();
    $telefones = exibirTelefone();
?>
<div class="imagem-quemsomos">
    <div class="img-quem">
        <img class="resp-img" src="./images/quem.png" alt="">
    </div>
    <div class="text-foot">
        <h1> Quem Somos</h1>
    </div>
</div>

<div class="imagem-footer">
    <div class="img-footer ">
            <img class="resp-img" src="{{ urlImg() . $institucional->imagem }}" alt="">
    </div>
</div>

<div class="about-contat">

    <div class="contat">
        <div class="logosevem">

            <div class="elemento-imagem">
                <img src="./images/logoseven.png" alt="">
            </div>

            <div class="name-marca">
                <h2>
                    Seven
                </h2>
                <h3>
                    Imóveis Associados
                </h3>
            </div>

        </div>

        <div class="contat-locali">
            <div class="number-contat">
                <ul>
                    <li class="number-paddi">
                        <a href="">
                            <i class="fa fa-phone"></i>
                        </a>
                    </li>
                    <li>

                        <a  href="tel:55{{ formatPhone($telefones[0]['telefone']) }}">{{ $telefones[0]['telefone'] }} </a>

                    </li>
                </ul>
            </div>

            <div class="localizacao-about">
                <div class="locali-abot number-contat">
                    <ul>
                        <li>
                            <a href="">
                                <img src="./images/roomm.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">{{$empresa->endereco}}
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="textabout">
        <ul>
            <li>
                <p>
                    {!! $institucional->text !!}
                </p>
            </li>
        </ul>
    </div>

</div>

<div class="formulario-about">
    <form>
        <input class="esli-form" type="text" placeholder="Nome" id="fname" name="name" value=""><br>
        <input class="tamanho-form" type="text" placeholder="Telefone" id="fname" name="telefone" value="">
        <input class="tamanh-formu" type="text" placeholder="E-mail" id="lname" name="email" value=""><br>
        <textarea class="esli-form" name="mensagem" id="" cols="30"  placeholder="Mensagem" rows="10"></textarea><br>

        <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>

        <input class="butto-form" type="submit" value="ENVIAR" />

      </form>
</div>



<!--js-->
<script src='https://www.google.com/recaptcha/api.js'></script>


@include('site.main.footer')
