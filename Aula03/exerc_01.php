<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <?php 
       /*
       $idade = 15;
       $peso = 45;
       $risco = " ";

       if($idade < 18 && $peso < 50)
       {
        $risco = "médio";
        echo "A idade é $idade anos e o peso é $peso kg." . 
        "A pessoa está no grupo de risco $risco";
       }
       elseif($idade < 18 && ($peso >= 50 && $peso <= 90))
       {
        $risco = "normal";
        echo "A idade é $idade anos e o peso é $peso kg." . 
        "A pessoa está no grupo de risco $risco";
       }
        */    
        /*
       $idade = 17;
       $situação = $idade >= 18 ? "Adulto" : "Adolescente";
       echo "O aluno é $situacao"; */

       $pais_01 = "Japãeo";
       echo match($pais_01)
       {
            "Brasil" => "O país escolhido é o Brasil",
            "Japão" => "O país escolhido é o Japão",
            "Alemanha" => "O país escolhido é a Alemanha",
            default => "Escolha uma das opções",
       };

    ?>    

</body>
</html>