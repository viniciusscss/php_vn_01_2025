<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Cálculo</h1>
    </header>
    <main>
        <section>
            <?php
                $lado1 = $_GET["lado1"];
                $lado2 = $_GET["lado2"];

                if ($lado1 == null || $lado2 == null || $lado1 <= 0 || $lado2 <= 0) {
                    echo "<p>⚠️ Os valores informados devem ser preenchidos corretamente e maiores que zero.</p>";
                } else {
                    $area = $lado1 * $lado2;
                    $perimetro = 2 * ($lado1 + $lado2);

                    echo "<p><strong>Lado 1:</strong> $lado1</p>";
                    echo "<p><strong>Lado 2:</strong> $lado2</p>";
                    echo "<p><strong>Área:</strong> $area</p>";
                    echo "<p><strong>Perímetro:</strong> $perimetro</p>";
                }
            ?>
            <br>
            <a href="javascript:history.go(-1)"><button>Voltar</button></a>
        </section>
    </main>
</body>
</html>
