
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Vendas</title>
        <link rel="stylesheet" type="text/css" href="css/styleVenda-4.css">
        <script src="lib/javascriptSlide.js"></script>
        <script src="lib/javascript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>

        <header>
            <div class="menu">

                <h1>COMPRE SEU CARRO</h1>
                <a href="login.php"><strong>LOGAR</strong></a>

            </div>

        </header> 

        <div class="slide">

            <img class="meuSlides" src="img/imagemslide1.jpg" />
            <img class="meuSlides" src="img/imagemslide2.jpg"/>
            <img class="meuSlides" src="img/imagemslide3.jpg" />  

        </div>

        <script>

            var myIndex = 0;

            carousel();

        </script>

        <form name="formFipe" id="formFipe" method="post" >

            <script src="lib/javascript.js"></script>

            <div class="form">

                <h1>ESCOLHA SEU CARRO</h1>

                <select id="marcas" ></select>


                <select  id="modelos" "></select>

                <select id="anos" ></select>

                <ul>
                    <h4> DADOS DO VEÍCULO</h4>
                    <li id="valor"></li>
                </ul>
                <form >
                    <input type="button" onclick="window.location = 'cadastro.php';" value="Comprar"/>

                </form>


            </div>

        </form>


        <footer class="FooterContainer ">

            <div class="footerLeft">

                <h3>COMPRE<span>CAR</span></h3>

                <p class="footerLinks">
                    <a href="index.php">Home</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">Lojas</a>
                    .
                    <a href="#">Contato</a>
                </p>

                <div class="FooterEmpresaNome"> 

                    <p> COMPRECAR © 2021 - 2021</p>

                    <p>Site seguro • </p>

                </div>

            </div>

            <div class="footercenter">

                <div>
                    <i class="fa FooterMap"></i>
                    <p><span> Centro</span> Campos dos Goytacazes, Brasil</p>
                </div>

                <div>
                    <i class="fa FooterPhone"></i>
                    <p>(99)99999999</p>
                </div>

                <div>
                    <i class="fa FooterEnvelope"></i>
                    <span>Administrativo:</span>
                    <a href="#">email@email.com.br</a>

                </div>

            </div>

            <div class="footeright">

                <p class="FooterEmpresa">
                    <span>Sobre a Empresa</span>
                    venda de veiculos
                </p>


            </div>

        </footer>

    </body>


</html>