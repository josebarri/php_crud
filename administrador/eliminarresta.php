<?php 
    if(!isset($_GET['id'])){
        header('Location: restaurantes.php?mensaje=error');
        exit();
    }

    include 'config/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM restaurante where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: restaurantes.php?mensaje=eliminado');
    } else {
        header('Location: restaurantes.php?mensaje=error');
    }
    
?>