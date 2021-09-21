
<!DOCTYPE html>

<?php
require_once 'CLASSES/ClasseUsuarios.php';
$u = new usuario()
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/styleLoginCadastro-3.css">
        <script src="lib/javascriptSlide.js"></script>
        <script src="lib/javascript.js"></script>
    </head>

    <header>
        <div class="menu">

            <h1>COMPRE SEU CARRO</h1>
       

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

    <body>
        <div id="corpoFormularioLogin">
            <h1>Logar</h1>
            <form method="POST" >
                <input type="email" name="email" placeholder=" Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="logar">
                <a href="cadastro.php"> Não é Inscrito? <strong>cadastre-se</strong></a>

                <?php
                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    //verificação de campos
                    if (!empty($email) && !empty($senha)) {
                        $u->conectar("projetosig", "localhost", "root", "");
                        if ($u->msgErro == "") {
                            if ($u->logar($email, $senha)) {
                                header("location: paginaCliente.php");
                            } else {
                                ?>
                                <div class="msgmErro" > email ou senha incorretos!</div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="msgmErro">erro!</div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="msgmErro">preencha todos os campos!</div>
                        <?php
                    }
                }
                ?>
            </form>
        </div>
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