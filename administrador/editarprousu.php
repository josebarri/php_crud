<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: usuario.php?mensaje=error');
    }

    include 'config/conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $telefono = $_POST['txtTelefono'];
    $correo = $_POST['txtCorreo'];

    $sentencia = $bd->prepare("UPDATE usuario SET nombre = ?, telefono = ?, correo = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $telefono, $correo, $id]);

    if ($resultado === TRUE) {
        header('Location: usuario.php?mensaje=editado');
    } else {
        header('Location: usuario.php?mensaje=error');
        exit();
    }
    
?>