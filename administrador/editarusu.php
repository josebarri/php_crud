<?php include 'template/cabecera.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: usuario.php?mensaje=error');
        exit();
    }

    include_once 'config/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from usuario where id = ?;");
    $sentencia->execute([$id]);
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarprousu.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $usuario->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="number" class="form-control" name="txtTelefono" autofocus required
                        value="<?php echo $usuario->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="txtCorreo" autofocus required
                        value="<?php echo $usuario->correo; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                        <a href="usuario.php" class="btn btn-danger">Cacelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/pie.php' ?>