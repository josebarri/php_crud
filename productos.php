<?php include("template/cabecera.php"); ?>

<?php
include_once("administrador/config/conexion.php");
$sentencia = $bd->query("select * from productos");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($productos);
?>

<div class="container">

<h2 class="text-center">¡Escríbenos, será un <span style="color: #2874A6;">placer atenderte!</span></h2>
<div><br><br></div>
    <div class="row">

    <?php foreach ($productos as $dato) { ?>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/2454533/pexels-photo-2454533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $dato->nombre; ?></h4>
                    <p>Lo puedes ver en:<span style="color: #2874A6;"><?php echo $dato->restaurante; ?></span></p>
                    <a name="" id="" class=" btn btn-success" href="restaurante.php" role="button"> Visitar </a>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>



<?php include("template/pie.php"); ?>