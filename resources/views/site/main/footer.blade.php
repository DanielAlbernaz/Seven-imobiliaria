

<!-- RODAPÉ -->
<footer >
    <div class="footer">
        <article class="colun-1 reta">
            <label for="">
                <img src="./images/marca.png" alt="">
            </label>
            <ul>
                <li class="a">
                    <a href="">Política de Privacidade</a>
                </li>
                <li class="a">
                    <a href="">Termos de uso</a>
                </li>
                <li class="a">
                    <img src="./images/room.png" alt="">
                    <a href="">Lorem ipsum dolor sit amet consectetur</a>
                </li>
                <li class="a">
                    <img src="./images/tel.png" alt="">
                    <a href="">(XX)XXXX-XXXX</a>
                </li>
                <li class="a">
                    <img src="./images/email.png" alt="">
                    <a href="">conceito@gmail.com</a>
                </li>
            </ul>
        </article>

        <article class="colun-2 reta left-colun ">
            <label for="" class="labeltop"> Serviços</label>
                <ul class="articul">
                    <li class="a">
                        <a href="">Lorem ipsum dolor</a>
                    </li>
                    <li class="a">
                        <a href="">Lorem ipsum dolor</a>
                    </li>
                    <li class="a">
                        <a href="">Lorem ipsum dolor</a>
                    </li>
                    <li class="a">
                        <a href="">Lorem ipsum dolor</a>
                    </li>
                </ul>
        </article>

        <article class="colun-3 reta left-colun ">
            <label for="" class="labeltop"> Blog </label>
                <ul class="articul">
                    <li class="a">
                        <a href="">Lorem ipsum dolor sit amet, 
                            consectetur</a>
                    </li>
                    <li class="a">
                        <a href="">Lorem ipsum dolor sit amet, 
                            consectetur</a>
                    </li>
                    <li class="a">
                        <a href="">Lorem ipsum dolor sit amet, 
                            consectetur</a>
                    </li>
                </ul>
        </article>

        <article class="colun-4 reta left-colu">
            <dd>
                <a href=""><i class="fa fa-facebook"></i></a>
            </dd>
            <dd>
                <a href=""><i class="fa fa-instagram"></i></a>
            </dd>
        </article>
    </div>

    <div class="pe">
        <label for=""> Todos direitos reservados 2021 </label>
    </div>

</footer>

</body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
 <script src="{{asset('assests/site/js/custom.js')}}"></script>

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
