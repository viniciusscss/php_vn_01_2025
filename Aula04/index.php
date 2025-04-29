<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

function minhaFuncao()
{
    return "Usando return pela  primeira vez";
    echo "Minha primeira função";
}

echo minhaFuncao();

?>
<!-- 
Crie uma função que faça a conversão de uma variavel de string para float
- Primeiro informe o tipo da variavel antes de converter;
- Em um segundo momento o tipo da variavel apos ter sido convertida;

is_bool() - verifica se a variavel é boolean
is_int() - verifica se a variavel é int
is_array() - verifica se a variavel é um array
... (Tem para todos os tipos) -->


<?php 

function conversor($var_01)
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
echo "<br><br> Variavel ainda não convertida: ";
echo gettype($var_01);
$var_01 = conversor($var_01);
echo "<br> Foi convertido para Float: ";
echo gettype($var_01);

?>





</body>
</html>