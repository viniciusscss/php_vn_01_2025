<!DOCTYPE html>
<?php 
    if(isset($_POST['enviar']))
    {
        $usuario = $_POST['usuario'];

        setcookie('usuario', $usuario, time() + 3600);

        header("Location:pagina02.php");
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
    <input type="text" name="usuario" placeholder="Informe o seu nome">
    <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>