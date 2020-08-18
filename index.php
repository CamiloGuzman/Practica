|<?php
if (isset($_GET['id'])) {
    require 'conexion.php';
    $conexion = new Conexion();
    $consulta = $conexion->conectar();

    $res = $consulta->query("select * from usuario where idUsuario={$_GET['id']}");

    if ($campos = $res->fetch_object()) {
        $nombre = $campos->nombre;
        $apellido = $campos->apellido;
        $correo = $campos->correo;
        $id = $campos->id;
        
    } else if (false) {
        
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
        </script>

        <link rel="stylesheet" href="estilo.css">   
    </head>
    <body>
        <form action="Crud.php" method = "post" enctype="multipart/form-data">
            <tr>
            <div class="registro" >
                <h1>Registro de Usuario</h1>
                <td>Documento</td>
                <td>
                    <input type="text" name="txtdocumento" placeholder="" value="<?php echo @$id; ?>">

                </td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>
                        <input type="text" id="nombre" name="txtnombre" placeholder="" value="<?php echo @$nombre; ?>">

                    </td>
                </tr>
                <tr>

                    <td>Apellido</td>
                    <td>
                        <input type="text" id="apellido" name="txtapellido" placeholder="" value="<?php echo @$apellido; ?>">

                    </td>
                </tr>
                
                <tr>

                    <td>Telefono</td>
                    <td>
                        <input type="text" id="telefono" name="txtTelefono" placeholder="" value="<?php echo @$telefono; ?>">

                    </td>
                </tr>
                
                <tr>

                    <td>Direccion</td>
                    <td>
                        <input type="text" id="direccion" name="txtdireccion" placeholder="" value="<?php echo @$direccion; ?>">

                    </td>
                </tr>
                <tr>
                    <td>Correo Electronico</td>
                    <td>
                        <input type="email" id="correo" name="txtcorreo" placeholder="" value="<?php echo @$correo; ?>">
                </tr>
                <tr>

                    <td>edad</td>
                    <td>
                        <input type="text" id="edad" name="txtedad" placeholder="" value="<?php echo @$edad; ?>">

                    </td>
                </tr>
                    
                <td>
                    <input type="submit" value="<?php
                    if (isset($_GET['id'])) {
                        echo "Actualizar";
                    } else {
                        echo "Registrar";
                    }
                    ?>" name="accion">
                </td>
                


            </div>

        </form>
    </body>
</html>
