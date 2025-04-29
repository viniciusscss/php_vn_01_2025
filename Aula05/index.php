<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = 'JAVA';
        echo 'Minha linguagem favorita é $nome. <br>';
        
        $nome01 = 'JavaScript';
        echo 'Minha linguagem favorita é ' . $nome01 . ' <br>';

        $nome02 = "PHP";
        echo "Minha linguagem favorita é $nome02. <br><br><br>";

        $name = "Acelino";
        $sname = "Freitas";
        //echo "$name "Popó " $sname";
        echo '$name "Popó" $sname <br>';
        echo "$name 'Popó' $sname <br>";
        echo "$name \"Popó\" $sname <br><br>";

        //Manipulação de strings 

        $nome01Manipula = " Linguagem Javascript ";
        $nome02Manipula = 'Linguagem python';
        $nome03Manipula = 'Linguagem PHP';

        echo "O número de caracteres é " . strlen
        ($nome01Manipula) . "<br><br>";
       
        //validação data

        function validar_data($data)
        {
            $partesData = explode('/', $data);
            if(count($partesData) !=3)    
            {
                return "A data informada está incompleta";
            }
            $dia = $partesData[0];
            echo $dia;
            echo "<br>";
            $mes = $partesData[1];
            echo $mes;
            echo "<br>";
            $ano = $partesData[2];
            echo $ano;
            echo "<br>";

            if(strlen($dia) < 1 or strlen($dia) > 2)
            {
                return "O número de caracteres informados para o dia estão incorreto"; 
            }

            if(strlen($mes) < 1 or strlen($mes) > 2)
            {
                return "O número de caracteres informados para o mês estão incorretos"; 
            }

            if(strlen($ano) !=4)
            {
                return "O número de caracteres informados para o ano estão incorretos"; 
            }
                return "A data informada está correta.";
        }

        echo validar_data("01/04/2025");
        echo "<br><br>";

        // outro exercício 

    function validar_data_new($data01)
    {
        $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
        $result = preg_match ($padrao, $data01);

        if($result == 1)
        {
            return "A data informada está correta";
        }
        else
        {
        return "A data informada está incorreta";
        }
    
    }

    echo validar_data_new("02/01/2025");

    ?>
    <?php 
    $primeiroArray = array(1,2,3,4,5);
    var_dump($primeiroArray);

    echo "<br>";

    $segundoArray = array(6,5,4,3);
    var_dump($segundoArray);

    echo "<br><br>";

    //função array_sum - soma de valores de um array

    $numeros = array(10,15,20,100);
    $total = array_sum($numeros);
    echo $total;

    echo "<br><br>";

    $first = array("hello", "world");
    $second = array("exit", "here");
    $merged = array_merge($first, $second);
    //echo $merged  (não podemos usar echo na junção de de arrays)
    print_r($merged);

    echo "<br><br>";

    /*
    Encontre o maior número no vetor abaixo
    */

    $nums = array(12, 19, 23, 95, -33);

    $maior = $nums[0];

    foreach($nums as $chave => $valor)
    {
        if($valor > $maior)
        {
            $maior = $valor;
        }
    }
        echo "O maior valor do array é: $maior";

    echo "<br><br>";

    //laço for tradicional

    $numeros11 = array(12, 19, 222, 95, -7);
    $maior = $numeros11[0];

    for($i = 0; $i < sizeof($numeros11); $i++)
    {
        if($numeros11[$i] > $maior)
        {
            $maior = $numeros11[$i];
        }
    }
        echo "O maior valor do array é: $maior" . "<br>"
            
    ?>

</body>
</html>