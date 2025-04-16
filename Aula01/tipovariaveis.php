<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            váriaveis sempre começam com o simbolo de $;
            variaveis aceitam caracteres á, ô, ç e afins;
            A linguagem é case sensitive em relação aos nomes;
            Algumas palavras possuem o uso reservado ($this, por exemplo);
            evite nomes muito curtos/longos;
        */

        echo "Olá, Mundo!" . "<br><br>"; 
        print "Olá, Mundo! <br><br>";
        
        //$varEcho = echo "Olá, Mundo! <br><br>";
        $varPrint = print "Olá, Mundo! <br><br>";

        $var = "Errada";
        $var01 = "Errada";

        $var02 = "Correto";
        $varOriginal = "Correto e comum";

        echo $var02 . "<br>";
        echo $varOriginal . "<br><br>";

        echo "A variável é do tipo " . gettype($varOriginal);
        
    ?>

    <br>

    <?php 
        $varInt = 666;
        echo gettype($varInt) . "<br>"; //"<br>" esse é pra pular linha

        $varReal = 456.98;
        echo gettype($varReal) . "<br>";

        $varBooleano = true;
        echo gettype($varBooleano) . "<br>";

        $varVetor = array (1,2,3);
        echo gettype($varVetor) . "<br>";
    ?>

    <br>
    
    <?php 
        $nome = "Carlos";
        $sobrenome = "Ferreira";
        $nome = "Felipe"; // no PHP a mesma TAG subscreve a anterior no caso Felipe, irá subescrever Carlos.

        //echo "Muito prazer, " . $nome . " ". $sobrenome - como o nome e sobrenome está após " temos que concatenar
        echo "Muito prazer, $nome $sobrenome" //assim não precisa concatenar
       
    ?>
    
    <br><br><br>
    <<?php 
        //operadores aritméticos
        $var5 = 2;
        $var6 = 8;
        
        echo "O valor da adição de dois números é " . $var5 + $var6 . "<br>";
        echo "O valor da exponenciação é " . $var5 ** $var6 . "<br>";
        echo "O valor da exponenciação com a função pow é " .  pow($var5, $var6) . "<br>";

    ?>

    <br><br>
    <?php 
        //Casting
        $var7 = 11.59;
        $var8 = (int)$var7;
        echo $var8 . "<br>";
        echo gettype($var7) . "<br>";
        echo gettype($var8) . "<br>";
    ?>
    <br><br>
    <?php 
        $varTeste01 = 33;
        var_dump($varTeste01) . "<br><br>";
        $vetorTeste = array ("PHP", "JAVA", "PYTHON", "JAVASCRIPT", "MYSQL");
        var_dump($vetorTeste);

        /*
        Calcule o perímetro e a àrea de uma circunferência e mostre o tipo da 
        variável referente as respostas obtidas
        */

    ?>
    
</body>
</html>