@include('site.main.header')

    <div class="fold">
        <div class="fund">
            <img src="./images/fold.png" alt="">
        </div>    
    </div>

    <!-- Formulario de Pesquisa/Filtro -->

    <div class="buscas">
        <div class="filterbusca">
            <div class="imoveis">

                <div class="every decoration back">
                    <a href="">Todos os imóveis</a>
                </div>

                <div class="venda decoration bord">
                    <a href="">Venda</a>
                </div>

                <div class="aluguel decoration bord">
                    <a href="">Aluguel</a>
                </div>

                <div class="busc">
                    <div class="iconbusc">
                        <a href=""><img src="./images/plus.png" alt=""></a>
                    </div>
                    <div class="labelbusc">
                        <a href=""> Busca Avançada</a>
                    </div>
                </div>

            </div>
            
            <div class="filter-imoveis">
                <form>
                    <input class="localit" type="localizacao" name="localizacao" placeholder="Localização">
                    <input class="tipoimo" type="imovel" name="imovel" placeholder="Tipo de Imóvel"><i class="fa fa-angle-down"></i>
                    <button class="filbusc"> Busca </button>
                </form> 
            </div>
        </div>
    </div>

    <div class="divisao">
        <a href=""> kajshfdarufhauhf </a>
    </div>
    
@include('site.main.footer')
