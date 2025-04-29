<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        // $idd = 15;
        // $peso = 44;
        // $risco = "";

      
        // if($idd < 18 && $peso < 50)
        // {
        //     $risco = "médio";
        //     echo "A idade é $idd anos e o peso é $peso Kg. A pessoa está no grupo de risco $risco. <br>";
        // }
        // elseif($idd < 18 && ($peso >= 50 && $peso <=90))
        // {
        //     $risco = "Normal";
        //     echo "A idade é $idd anos e o peso é $peso Kg. A pessoa está no grupo de risco $risco. <br>";
        // } 

        // $idade = 17;
        // $situacao = $idade >= 18 ? "Adulto" : "Adolescente";
        // echo "O aluno é $situacao";

        // $pais_01 = "";
        // echo match ($pais_01) 
        // {
        //     "Brasil" => "O país escolhido é o Brasil",
        //     "Japão" => "O país escolhido é o Japão",
        //     "Alemanhã" => "O país escolhido é a Alemanhã",
        //     default => "Escolha uma das opções",
        // };

        $vetor = array("SP"=>"São Paulo","RJ"=>"Rio de Janeiro", "PE"=>"Recife", "AM"=> "Manaus", "GO"=>"Goiânia", "SC"=>"Florianópolis");

        foreach($vetor as $estado => $capital)
        {
            echo "A capital de $estado é $capital <br>";
        }

    ?>


</body>
</html>
