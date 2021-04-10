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
                </form> 
            </div>
        </div>
    </div>

    <div class="divisao">
        <a href=""> kajshfdarufhauhf </a>
    </div>
    
@include('site.main.footer')
