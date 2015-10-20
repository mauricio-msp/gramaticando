<?php

/** @var string */ 
$host = is_string($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "" ; 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'vertrigo');
define('DBSA', 'gramaticando');

define('RAIZ', "http://{$host}/Gramaticando/");

// AUTO LOAD DE CLASSES ########################################################
function __autoload($Class) {

    $cDir = array('DAO','Exception');

    $iDir = null;

    foreach ($cDir as $dirName) {
        if (!$iDir && file_exists(__DIR__ . "/{$dirName}/{$Class}.class.php")) {
            include_once (__DIR__ . "/{$dirName}/{$Class}.class.php");
            $iDir = true;
        }
    }

    if (!$iDir) {
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
        die;
    }
}

