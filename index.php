<?php

    /** Inclui o arquivo de configurações */
    include_once('Classes/Config.inc.php');
   
    /** @var Url */
    $url = Url::getInstance();
    
    if($url->getURL(0) == 'login') {
        include_once("pages/pg{$url->getURL(0)}.php");   
    }else {
        include_once("pages/pg{$url->getURL(0)}.php");
    }
   
     
    

