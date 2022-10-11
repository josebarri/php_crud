<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtDireccion"])){
        header('Location: restaurantes.php?mensaje=falta');
        exit();
    }

    include_once 'config/conexion.php';
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $direccion = $_POST["txtDireccion"];
    
    $sentencia = $bd->prepare("INSERT INTO restaurante(nombre,telefono,direccion) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$telefono,$direccion]);

    if ($resultado === TRUE) {
        header('Location: restaurantes.php?mensaje=registrado');
    } else {
        header('Location: restaurantes.php?mensaje=error');
        exit();
    }
    
?>