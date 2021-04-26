@include('site.main.header')

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
            <img class="resp-img" src="./images/imgfooter.png" alt="">
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
                            <img src="./images/bi_telephone-forward.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href=""> (XX) XXXX-XXXX</a>
                    </li>
                </ul>
            </div>

            <div class="localizacao-about">
                <div class="locali-abot number-contat">
                    <ul>
                        <li>
                            <a href="">Lorem ipsum dolor sit amet, consectetur.
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="./images/roomm.png" alt="">
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In neque, aliquam ac tristique sapien imperdiet. Nisl, phasellus ultricies egestas eget fusce. Aenean eu dictum sit ultricies quis morbi dui eget. Sit commodo arcu, cursus ut posuere leo eu est vestibulum.
                </p>
            </li>
            <li>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In neque, aliquam ac tristique sapien imperdiet. Nisl, phasellus ultricies egestas eget fusce. Aenean eu dictum sit ultricies quis morbi dui eget. Sit commodo arcu, cursus ut posuere leo eu est vestibulum.
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
