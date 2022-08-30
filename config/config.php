<?php

    define("BASE_URL", $_SERVER['DOCUMENT_ROOT'].'/praktikumsajtShop/');

    define("ENV_FAJL", BASE_URL. "config/.env");
    define("LOG_FAJL", BASE_URL. "data/log.txt");
    define("ERR_FAJL", BASE_URL. "data/errors.txt");


    define("SERVER", env("SERVER"));
    define("DATABASE", env("DATABASE"));
    define("USERNAME", env("USERNAME"));
    define("PASSWORD", env("PASSWORD"));

    function env($marker){
        $niz = file(ENV_FAJL);
        $trazenaVrednost = "";
    
        foreach($niz as $red){
            $red = trim($red);
    
            list($identifikator, $vrednost) = explode("=", $red);
    
            if($identifikator == $marker){
                $trazenaVrednost = $vrednost;
                break;
            }
        }
    
        return $trazenaVrednost;
    }
?>