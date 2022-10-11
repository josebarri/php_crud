<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtStock"]) || empty($_POST["txtPrecio"]) || empty($_POST["txtRestaurante"])){
        header('Location: Productos.php?mensaje=falta');
        exit();
    }

    include_once 'config/conexion.php';
    $nombre = $_POST["txtNombre"];
    $stock = $_POST["txtStock"];
    $precio = $_POST["txtPrecio"];
    $restaurante = $_POST['txtRestaurante'];
    
    $sentencia = $bd->prepare("INSERT INTO productos(nombre,stock,precio,restaurante) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$stock,$precio,$restaurante]);

    if ($resultado === TRUE) {
        header('Location: Productos.php?mensaje=registrado');
    } else {
        header('Location: Productos.php?mensaje=error');
        exit();
    }
    
?>