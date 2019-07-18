<?php
    require_once './Login.php';         //Importando a classe
    if($_GET['op'] == 1){
        echo "<script>alert('Efetuado logoff!');</script>";
    }
    $l = new Login();                   //Criando objeto
    $result = $l->buscar("mates", "123456");             //Atribuindo a uma variavel a pesquisa do objeto
    //Testa se achou dados
    if(!empty($result)){
        foreach ($result as $linha){        //For para percorrer objeto e mostrar dados
            echo "Login: {$linha->login}<br>";
        }
        //Inicia variavel de sessão
        session_start();
        //Cria variavel de sessao
        $_SESSION['login'] = "mateus";
        header("Location: test2.php");
    } else {
        echo "Login não encontrado!";
    }