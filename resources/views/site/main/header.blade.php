<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    $empresa = exibirInfoEmpresa();
    $telefones = exibirTelefone();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assests/site/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/site/css/style2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/site/css/main.css')}}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    {{-- css banner --}}
    <link rel="stylesheet" href="{{asset('assests/site/js/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/nivo-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/preview.css')}}" />
    <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/style.css')}}" />

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
                                    <p><i style="color:white" class="fa fa-phone"></i> <a style="color:white" href="tel:55{{ formatPhone($telefones[0]['telefone']) }}">{{ $telefones[0]['telefone'] }} </a></p>

                                </a>
                            </li>
                            <li>
                                <a style="cursor:pointer">
                                    <font color="white">
                                        <i class="fa fa-map-marker"></i> {{ $empresa->endereco }}
                                    </font>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="iconredes">
                        <dd>
                            <a href="{{ $empresa->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </dd>
                        <dd>
                            <a href="{{ $empresa->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                        </dd>
                    </div>

                </div>

            </div>

        </div>

        <nav>

            <div class="topnav" id="myTopnav" style="cursor :pointer;" >
                    <label onclick="redirect()" style="cursor :pointer;"  for="" class="logo">
                            <img style="cursor :pointer;" src="./images/LOGO.PNG" alt="">
                    </label>
                <ul>
                    <a href="institucional">CONTATO</a>
                    <a href="imoveis">IMÓVEIS</a>
                    <a href="institucional" class="">QUEM SOMOS</a>
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
