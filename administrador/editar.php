<?php include 'template/cabecera.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: Productos.php?mensaje=error');
        exit();
    }

    include_once 'config/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from productos where id = ?;");
    $sentencia->execute([$id]);
    $productos = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $productos->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">stock: </label>
                        <input type="number" class="form-control" name="txtStock" autofocus required
                        value="<?php echo $productos->stock; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="text" class="form-control" name="txtPrecio" autofocus required
                        value="<?php echo $productos->precio; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Restaurante: </label>
                        <input type="text" class="form-control" name="txtRestaurante" autofocus required
                        value="<?php echo $productos->restaurante; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $productos->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                        <a href="Productos.php" class="btn btn-danger">Cacelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/pie.php' ?>