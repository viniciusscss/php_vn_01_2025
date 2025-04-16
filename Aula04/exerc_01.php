<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerc_01</title>
</head>
<body>
    
    <?php 
    function minhaFuncao ()

    {
        return "Usando ruturn pela primeira vez";
        echo "Minha primeira função";
    }
    
    echo minhaFuncao();
    ?>
<!-- 
    Crie uma função que faça a conversão de uma variavel de string para float
    -primeiro informe o tipo de variavel amtes de converter;
    - Em um segundo momento o tipo de variavel apos ter sido convertido;

    is_bool() - verifica se a variavel é um booleano
    is_int() - verifica se a variavel é um int
    is_float - verifica se a variavel é um float
    is_array - verifica se a variavel é um arrey -->

    <?php 

        function convertTofloat ($var_01)
    {
        if(is_float($var_01))
        {
            return $var_01;
        }
        else
    {
        return (float)$var_01;
    }
    }
        $var_01 = "15";
        echo "<br>Variável ainda não foi convertida: ";
        echo gettype($var_01);
        $var_01 = convertTofloat($var_01);
        echo "<br>Foi convertido para FLOAT: ";
        echo gettype($var_01);
?>


</body>
</html>