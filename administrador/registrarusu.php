<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtCorreo"])){
        header('Location: usuario.php?mensaje=falta');
        exit();
    }

    include_once 'config/conexion.php';
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];
    
    $sentencia = $bd->prepare("INSERT INTO usuario(nombre,telefono,correo) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$telefono,$correo]);

    if ($resultado === TRUE) {
        header('Location: usuario.php?mensaje=registrado');
    } else {
        header('Location: usuario.php?mensaje=error');
        exit();
    }
    
?>