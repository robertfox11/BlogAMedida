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
        <h1 class="center">Section Consulta</h1>
        <table>
        <tr>
            <th>Matricula</th>
            <th>Name</th>
            <th>Lastname</th>
        </tr>
        <?php
            foreach($this->usuarios as $row){
                $usuario = new Usuario();
                $usuario = $row;
            
            ?>
        <tr>
            
            
            <td><?php echo $usuario->matricula ?></td>
            <td><?php echo $usuario->name ?></td>
            <td><?php echo $usuario->lastname ?></td>
            <td><a href="#">Editar</a></td>
            <td><a href="#">Eliminar</a></td>
            
            
        </tr>
        <?php }?>
        </table>

        <!-- <?php var_dump($this->usuarios) ?> -->
    </div>
    <?php
    require_once 'views/footer.php';
    ?>
</body>

</html>