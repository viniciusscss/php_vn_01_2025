<!DOCTYPE html>

<?php 
    if(isset($_COOKIE['numVisitas']))
    {
        echo "Você visitou a página cookie.php " . $_COOKIE
        ['numVisitas'] . " vez(es)";

        setcookie('numVisitas', $_COOKIE['numVisitas'] + 1, time() + 3);
    }
    else {
        setcookie("numVisitas", "1", time() + 3);
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Você acabou de visitar essa página. Aperte F5</h2><br><br>
</body>
</html>