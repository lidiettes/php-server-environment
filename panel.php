<?php
session_start();

if (!isset ($_SESSION["user"]) || !isset ($_SESSION["pwd"])){
    header("Location: ./index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome admin </h1>

    <?php 
    print_r($_SESSION);
    ?>
    <div>
        <a href="./close_session.php"> Cerrar sesión </a> 
    </div>

</body>
</html>