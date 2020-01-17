<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    
    <div id="main">
        <h1> Seccion Nuevo </h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form action="<?php echo constant('URL'); ?>nuevo/registrarse" method="POST">
            <p>
                <label for="matricula">matricula</label>
                <input type="text" name="matricula" id="" required>
            </p>
            <p>
                <label for="name">name</label>
                <input type="text" name="name" id="">
            </p>
            <p>
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" id="" >
            </p>
            <input type="submit" value="Registrarse">
        </form>
    </div>
    <?php
    require_once 'views/footer.php';
    ?>



</body>

</html>