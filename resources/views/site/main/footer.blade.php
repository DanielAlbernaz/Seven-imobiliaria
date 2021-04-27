<?php
    $empresa = exibirInfoEmpresa();
    $telefones = exibirTelefone();
?>

<!-- RODAPÉ -->
<footer >
    <div class="footer">
        <article class="colun-1 reta">
            <a href="/" style="cursor: pointer">
                <label style="cursor: pointer" for="">
                    <img style="cursor: pointer" src="./images/marca.png" alt="">
                </label>
            </a>
            <ul>
                <li class="a">
                    <a href="politica-privacidade">Política de Privacidade</a>
                </li>
                <li class="a">
                    <a href="termo-uso">Termos de uso</a>
                </li>
                <li class="a">
                    <img src="./images/room.png" alt="">
                    <a style="cursor:pointer"> {{ $empresa->endereco }}</a>
                </li>
                @for ($i = 0; $i < count($telefones); $i++)
                    <li class="a">
                        <i style="color:white" class="fa fa-phone"></i>
                        <a style="color:white" href="tel:55{{ formatPhone($telefones[$i]['telefone']) }}">{{ $telefones[$i]['telefone'] }} </a>
                    </li>
                @endfor

                <li class="a">
                    <i class="fa fa-envelope" style="color: white"></i>
                    <a href="">{{ $empresa->email }}</a>
                </li>
            </ul>
        </article>



        <article class="colun-2 reta left-colun ">
            {{-- <label for="" class="labeltop"> Serviços</label> --}}
                <ul class="articul">
                    <li class="a">
                        <a href="/">HOME</a>
                    </li>
                    <li class="a">
                        <a href="institucional">CONTATO</a>
                    </li>
                    <li class="a">
                        <a href="imoveis">IMÓVEIS</a>
                    </li>
                    <li class="a">
                        <a href="institucional" class="">QUEM SOMOS</a>
                    </li>
                </ul>
        </article>

        <article class="colun-4 left-colu">
            <dd>
                <a href="{{ $empresa->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
            </dd>
            <dd>
                <a href="{{ $empresa->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
            </dd>
        </article>
    </div>

    <div class="pe">
        <label for=""> COPYRIGHT © 2021. TODOS OS DIREITOS RESERVADOS - SEVEN CORRETORES ASSOCIADOS. </label>
    </div>

</footer>

</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVt0KZlGvIJYBxTod0Fm33ZL9DriWeSqk&amp;signed_in=true&amp;libraries=places&amp;callback=initMap"></script>
 <script src="{{asset('assests/site/js/custom.js')}}"></script>
 <script src="{{asset('assests/site/js/maps.js')}}"></script>
 <script src="{{asset('assests/site/js/main.js')}}"></script>

   {{-- Banner js --}}
   <script type="text/javascript" src="{{asset('assests/site/js/minimalist-slider/assets/js/jquery.minimal-plugins.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('assests/site/js/minimalist-slider/assets/js/jquery.minimalist-banner.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('assests/site/js/slider/js/jquery.nivo.slider.js')}}"></script>
   <script type="text/javascript" src="{{asset('assests/site/js/slider/home.js')}}"></script>

 <script>

    function venda(){
        $('.venda').addClass('active');
        $('.todos').removeClass('active');
        $('.aluguel').removeClass('active');
    }

    function todos(){
        $('.todos').addClass('active');
        $('.venda').removeClass('active');
        $('.aluguel').removeClass('active');
    }

    function aluguel(){
        $('.venda').removeClass('active');
        $('.todos').removeClass('active');
        $('.aluguel').addClass('active');
    }

    $(document).ready(function() {

        function searchTypeButtons() {
             $('.search-type label.active input[type="radio"]').prop('checked', true);
             var buttonWidth = $('.search-type label.active').width();
             var arrowDist = $('.search-type label.active').position().left;
             $('.search-type-arrow').css('left', arrowDist + (buttonWidth / 2));
             $('.search-type label').on('change', function() {
                 $('.search-type input[type="radio"]').parent('label').removeClass('active');
                 $('.search-type input[type="radio"]:checked').parent('label').addClass('active');
                 var buttonWidth = $('.search-type label.active').width();
                 var arrowDist = $('.search-type label.active').position().left;
                 $('.search-type-arrow').css({
                     'left': arrowDist + (buttonWidth / 2),
                     'transition': 'left 0.4s cubic-bezier(.87,-.41,.19,1.44)'
                 });
             });
         }

         if ($(".search-form").length) {
            searchTypeButtons();
            $(window).on('load resize', function() {
                searchTypeButtons();
            });
        }
    });

    </script>
</html>
