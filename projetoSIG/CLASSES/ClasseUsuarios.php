<?php

/**
 * Description of CLASSES
 *
 /*
 *
 * @author wesley
 */
class usuario 
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha) 
    { 
        global $pdo;
        try {
            
             $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            
        } catch (Exception $ex) {
           $msgErro = $e->getMessage();
        }
        
    }
    
    public function cadastrar($nome, $cpf, $telefone, $email, $senha)
    {
        global $pdo;
        //verificar se ja tem cadastro//
        $sql = $pdo->prepare("SELECT id_usuario FROM  usuario
              WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount()> 0){
            return false; //ja esta cadastrado
        }
        else {
        //cadastrar se não tiver //
            $sql =$pdo->prepare("INSERT INTO usuario (nome, cpf, telefone,
                email, senha)VALUES (:n, :c, :t, :e, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":c",$cpf);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",$senha);
            $sql->execute();
            return true;
        }
    }
    
    public function logar($email, $senha) {
        global $pdo;
        //verifiucar email e senha para logar
        $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e 
               AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",$senha);
        $sql->execute();
        if($sql->rowCount() > 0){
            //logar
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //logado 
           
        }
        else{
            return false; //nao logou
        }
    }
    
}