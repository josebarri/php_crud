<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: Productos.php?mensaje=error');
    }

    include 'config/conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $stock = $_POST['txtStock'];
    $precio = $_POST['txtPrecio'];
    $restaurante = $_POST['txtRestaurante'];

    $sentencia = $bd->prepare("UPDATE productos SET nombre = ?, stock = ?, precio = ?, restaurante = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $stock, $precio, $restaurante, $id]);

    if ($resultado === TRUE) {
        header('Location: Productos.php?mensaje=editado');
    } else {
        header('Location: Productos.php?mensaje=error');
        exit();
    }
    
?>