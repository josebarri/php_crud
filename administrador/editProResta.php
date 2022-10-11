<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: restaurantes.php?mensaje=error');
    }

    include 'config/conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];

    $sentencia = $bd->prepare("UPDATE restaurante SET nombre = ?, telefono = ?, direccion = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $telefono, $direccion, $id]);

    if ($resultado === TRUE) {
        header('Location: restaurantes.php?mensaje=editado');
    } else {
        header('Location: restaurantes.php?mensaje=error');
        exit();
    }
    
?>