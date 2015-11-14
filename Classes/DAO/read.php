<?php

     function ler($nome) {
        
        // configurações particulares
        require_once 'config.php'; 
         
        $pdo = new PDO("mysql:host=". HOST .";dbname=". DBSA , USER, PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
        
        try {
            $inserir = $pdo->prepare("SELECT nome From user WHERE nome = ?");
            $inserir->bindValue(1, $nome);
            
            $inserir->execute();
            
            if($inserir->rowCount() >= 1):
                return TRUE;
            else: 
                return FALSE;
            endif;
                
            
        } catch (PDOException $ex) {
            echo "Erro ao ler dados: ". $ex->getMessage();
        }
    }