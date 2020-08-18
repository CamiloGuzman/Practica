<?php


require 'conexion.php';
$conexion = new Conexion();
$consulta = $conexion->conectar();
if (isset($_GET['eliminar'])) {
    $consulta->query("delete from usuario where idUsuario={$_GET['id']}");
}

$res = $consulta->query("SELECT * FROM usuario");



?>



<!DOCTYPE html>

<html>
    <p></p>
    <head>
        <meta charset="UTF-8">
        <title></title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body class="text-center">

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Edad</th>

                    <th scope="col">Editar Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                while ($campos = $res->fetch_object()) {
                    ?>
                    <tr>
                        <th scope="row" <?php echo $campos->id; ?></th>
                        <td><?php echo $campos->nombre; ?></td>
                        <td><?php echo $campos->apellido; ?></td>
                        <td><?php echo $campos->telefono; ?></td>
                        <td><?php echo $campos->direccion; ?></td>
                        <td><?php echo $campos->correo; ?></td>
                        <td><?php echo $campos->edad; ?></td>                             
                        <td>
                            <button type="button" class="btn btn-info" onclick="{
                                        window.location.href = 'index.php?editar&id=<?php echo $campos->id; ?>'
                                    }" >Editar</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Realmente desea eliminar a  <?php echo $campos->nombre; ?> ')) {
                                        window.location.href = '?eliminar&id=<?php echo $campos->id; ?>'
                                    }">Eliminar</button>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>

        <br/>
        <a href="cerrar.php" class="btn bg-primary btn-sm text-white">Cerrar sesion</a>

        
  	</div>


       

 </body>
</html>