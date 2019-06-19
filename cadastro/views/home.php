<?php
    session_start();
    if(isset($_SESSION["id"]) && empty($_SESSION["id"]) == false){
        echo "<h1>Parabéns, você é gay</h1>";
    }
    else{
        header("Location: /login");
    }
?>


<a href="/login/sair">Sair</a>