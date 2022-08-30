<?php

    require_once "config.php";

    zabeleziPristupStranici();

    try {
        $conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE.";charset=utf8", USERNAME, PASSWORD);

        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }

    function zabeleziPristupStranici(){

        $date = date("d. m. Y. h:i:s");
        
        @$file = fopen(LOG_FAJL, "a");
        @fwrite($file, "{$_SERVER['PHP_SELF']}\t{$date}\t{$_SERVER['REQUEST_URI']}\t{$_SERVER['REMOTE_ADDR']}\t\n");
        @fclose($file);
    }

    function zabeleziGreske($error){
        @$open = fopen(ERR_FAJL,"a");
        $unos="Not logged in user\t".$error."\t".date('d-m-Y H:i:s')."\n";
        
        @fwrite($open,$unos);
        @fclose($open);
    }
?>
    
