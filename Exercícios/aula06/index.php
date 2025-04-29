<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de Retângulo</title>
</head>
<body>
    <header>
        <h1>Informe os lados do retângulo</h1>
    </header>
    <main>
        <section>
            <form action="Resultado.php" method="get">
                <label for="lado1">Lado 1</label>
                <input type="number" name="lado1" id="lado1" placeholder="Digite o valor do lado 1" min="0" step="any" required>

                <label for="lado2">Lado 2</label>
                <input type="number" name="lado2" id="lado2" placeholder="Digite o valor do lado 2" min="0" step="any" required>

                <input type="submit" value="Calcular">
                <input type="reset" value="Limpar">
            </form>
        </section>
    </main>
</body>
</html>
