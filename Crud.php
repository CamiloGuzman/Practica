<?php
require 'conexion.php';
        $conexion = new Conexion();
        $consulta = $conexion->conectar();

function Guardar() {
    $id = $_POST['txtdocumento'];
    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtdireccion'];
    $correo = $_POST['txtcorreo'];
    $edad = $_POST['txtedad'];

    

        $sql = "INSERT INTO `usuario`(`idUsuario`,`nombre`, `apellido`,`telefono`,`direccion`,`correo`,`edad`)"
                . "VALUES ('$id','$nombre','$apellido','$telefono','$direccion','$correo''$edad')";

    
            
        
}

function Actualizar() {
    $id = $_POST['txtdocumento'];
    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtdireccion'];
    $correo = $_POST['txtcorreo'];
    $edad = $_POST['txtedad'];


    

        $sql = "UPDATE `usuario` SET `nombre`='$nombre', `apellido`='$apellido', `telefono`='$telefono', `direccion`='$direccion', `correo`='$correo',`edad`=$edad' "
                . "WHERE id='$id'";

}

if (@$_POST['accion'] == 'Registrar') {
    Guardar();
    header("location:listar.php");
} else
 if (isset($_POST['txtdocumento']) && $_POST['accion']=="Actualizar") {
    Actualizar();
          
}
