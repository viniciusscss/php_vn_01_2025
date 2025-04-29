<?php 
    if(isset($_COOKIE['usuario']))
    {
        echo "Usuário: " . $_COOKIE['usuario'] . " está cadastrado <br>";

        setcookie("usuario", $usuario, time() -3600);
    }

    if(count($_COOKIE) > 0)
    {
        echo "Existe " . count($_COOKIE) . " cookie existente";
    }
?>