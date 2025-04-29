<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

echo "Wallacy me paga! <br>";

    $nome = 'JAVA';
    echo 'Minha linguagem favorita é $nome. <br>';

    $nome01 = 'JS';
    echo 'Minha linguagem favorita é ' . $nome01 . '.<br>';

    $nome02 = "php";
    echo "Minha linguagem favorita é $nome02. <br><br><br>";

    $name = "Acelino";
    $sname = "Freitas";
    //echo "$name"Popó"$sname";
    echo '$name "Popó" $sname <br>'; 
    echo "$name 'Popó' $sname <br>";
    echo "$name \"Popó\" $sname <br><br>"; 

    // Manipulação de string 

    $nome01Manipula = "linguagem JS";
    $nome02Manipula = "linguagem Jpython";
    $nome03Manipula = "linguagem PHP";

    echo "O número de caracteres é " . strlen
    ($nome01Manipula) . "<br><br>";

    // Validando datas

    function validar_data($data) {
        $partesData = explode('/', $data);
        
        if(count($partesData) != 3) {
            return "A data está incompleta :/";
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

        if(strlen($dia) < 1 or strlen($dia) > 2) {
            return "O número de caracteres para o dia estão incorretos";
        }

        if(strlen($mes) < 1 or strlen($mes) > 2) {
            return "O número de caracteres para o mês estão incorretos";
        }

        if(strlen($ano) !=4) {
            return "O número de caracteres para o ano estão incorretos";
        }

            return "A data informada está OK";

    }
    echo validar_data('01/04/2025');

    echo "<br><br>";
    function validar_data_new($data01) {
        $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
        $result  = preg_match($padrao, $data01);

        if($result == 1) {
            return "A data está OK :) <br>";
        } else {
            return "A data está incorreta :/ <br>";
        }
        
    }
    echo validar_data_new('02/1/2025');
    echo "<br><br>";
?>

<?php 

    $primeiroArray = array(1,2,3,4,5);
    var_dump($primeiroArray);
    echo "<br><br>";
    
    $segundoArray = array(6,5,4,3);
    var_dump($segundoArray);
    echo "<br><br>";

    // Funçao array_som() - soma os valores de um array

    $numeros = array(10, 15, 20, 100);
    $total = array_sum($numeros);
    echo "A soma do array é " . $total;
    
    echo "<br><br>";

        $first = array("hello", "world");
        $second = array("exit", "here");
        $merged = array_merge($first, $second);
        print_r($merged);

    /*
        Encontre o maior numero no vetor
    */
    echo "<br>";

    $nums = array(12, 19, 23, 95, -33);

    $maior = $nums[0];

    foreach($nums as $chave => $valor) {
        if($valor > $maior) {
            $maior = $valor;
        }
    }
        echo "O maior valor é: $maior";
        echo "<br><br>";
?>

</body>
</html>