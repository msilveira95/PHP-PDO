<?php
/**
 * @author mateus
 */
class Login {
    private $pdo;
    
    function __construct() {
        try{
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=bd_php", "root", "root");
        } catch (Exception $ex) {
            echo "Erro: {$ex}";
        }
    }
    
    function buscar($login, $senha){
        try{
            //Criando SQL
            $sql = "select * from users where login = '{$login}' and senha = '{$senha}'";
            $st = $this->pdo->prepare($sql);
            $st->execute();
            $st->setFetchMode(PDO::FETCH_OBJ);
            return $st->fetchAll();
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
}