<?php 
    if(!isset($_GET['id'])){
        header('Location: usuario.php?mensaje=error');
        exit();
    }

    include 'config/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM usuario where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: usuario.php?mensaje=eliminado');
    } else {
        header('Location: usuario.php?mensaje=error');
    }
    
?>