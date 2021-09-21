<!DOCTYPE html>

<?php
require_once 'CLASSES/ClasseUsuarios.php';
$u = new usuario()
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>cadastro</title>
        <link rel="stylesheet" type="text/css" href="css/styleLoginCadastro-3.css">
        <script src="lib/javascriptSlide.js"></script>
        <script src="lib/javascript.js"></script>
    </head>
    <body>

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

        <div id="corpoFormularioCadastro">
            <h1>Cadastre-se</h1>
            <form method="POST" >
                <input type="text" name="nome" title="Nome Completo" placeholder="Nome Completo" required maxlength="30">
                <input type="text" name="cpf" title="cpf" placeholder="cpf" maxlength="30" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}">
                <input type="text" name="telefone" title="telefone" placeholder="Telefone" maxlength="30" >
                <input type="email" name="email" title="email" placeholder=" Email" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                <input type="password" name="senha" title="senha" placeholder="Senha" maxlength="8">
                <input type="password" name="confirmarSenha" title="confirmarSenha" placeholder="Confirmar Senha" maxlength="8">
                <input type="submit" value="cadastrar">
                <a href="javascript:history.back()"><strong>voltar para página anterior?</strong></a>

                <?php
                if (isset($_POST['nome'])) {
                    $nome = $_POST['nome'];
                    $cpf = $_POST['cpf'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $confirmarSenha = $_POST['confirmarSenha'];

                    //verificaÃ§Ã£o de campos
                    if (!empty($nome) && !empty($cpf) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
                        $u->conectar("projetosig", "localhost", "root", "");
                        if ($u->msgErro == "") {
                            if ($senha == $confirmarSenha) {
                                if ($u->cadastrar($nome, $cpf, $telefone, $email, $senha)) {
                                    header("location: login.php");
                                } else {
                                    ?>
                                    <div class="msgmErro">email ja cadastrado!</div>
                                    <a href="login.php"> JÁ SE CADASTROU? <strong>LOGAR</strong></a>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="msgmErro">senha e confirmar diferentes!</div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="msgmErro"> erro:.$u->msgErro;</div>
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
                    <a href="index.html">Home</a>
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