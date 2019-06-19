<?php
    require "environment.php";
    global $config;
    $config = array();

    if(ENVIRONMENT == "development"){
        $config["dbname"] = "cadastro";
        $config["dbuser"] = "root";
        $config["dbpass"] = "";
        $config["host"] = "127.0.0.1";
    }
    else {
        $config["dbname"] = "siteinstitucional";
        $config["dbuser"] = "root";
        $config["dbpass"] = "";
        $config["host"] = "127.0.0.1";
    }
?>