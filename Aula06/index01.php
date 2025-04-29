<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("./pagina.php"); //include avisa sobre erro, mas não para a página.
        echo "<hr>";
        require_once("./pagina.php"); //trava sobre o erro, pará a página.
        //echo "<hr>";



    ?>


</body>
</html>