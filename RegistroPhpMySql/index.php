<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Logint</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <form method="post">
        <h1>¡Suscribite!</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>
    <?php
    include("registro.php");
    ?>
</body>

</html>