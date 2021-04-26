<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assests/site/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/site/css/style2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/site/css/main.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Seven | Imóbiliaria</title>
</head>
<body>
    <header>
        <div class="cabecalho">

            <div class="rectangle">

                <div class="rec">

                    <div class="telphone">
                        <ul class="icontel">
                            <li class="telwidth">
                                <a href="">
                                    <p><i class="fa fa-phone"></i> (XX) XXXX-XXXX</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <font color="white">
                                        <i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet, consectetur.
                                    </font>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="iconredes">
                        <dd>
                            <a href=""><i class="fa fa-facebook"></i></a>
                        </dd>
                        <dd>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </dd>
                    </div>

                </div>

            </div>

        </div>

        <nav>
            
            <div class="topnav" id="myTopnav">
                <label for="" class="logo">
                    <img src="./images/LOGO.PNG" alt="">
                </label>
                <ul>
                    <a href=""><img src="./images/turned_in_not.png" alt=""></a>
                    <a href="#home" class="">Loren</a>
                    <a href="#news">Loren</a>
                    <a href="#contact">Loren</a>
                    <a href="#about">Loren</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                    </a>
                </ul>
              </div>
        </nav>

        <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>

    </header>
