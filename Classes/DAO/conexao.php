<?php

/**
 * Description of conexao
 *
 * @author Maurício
 */

 /** Inclui o arquivo de configurações gerais*/
    include_once('Classes/Config.inc.php');

class conexao {

   public function conectar() {
        
        try{
            $pdo = new PDO("mysql:host=". HOST .";dbname=". DBSA , USER, PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro ao conectar ao banco " . $e->getMessage();
        }
        
    }
    
}
