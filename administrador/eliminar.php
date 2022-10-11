<?php 
    if(!isset($_GET['id'])){
        header('Location: Productos.php?mensaje=error');
        exit();
    }

    include 'config/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM productos where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: Productos.php?mensaje=eliminado');
    } else {
        header('Location: Productos.php?mensaje=error');
    }
    
?>