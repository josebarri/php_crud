<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS only -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/comida.png">
  <title>Great Palate </title>
  <style>
    .banner-image {
      background-image: url('img/fondd.jpg');
      background-size: cover;
    }
  </style>
</head>
</head>

<body>
<?php   $url="http://".$_SERVER['HTTP_HOST']."/siweb/administrador/login.php"?>
  <header class="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <img src="img/comida.png" width="45" height="45" alt="">
        <a class="navbar-brand" href="index.php"> <SPAn class="h4" style="color: #2874A6;">Great </SPAn>Palate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="restaurante.php">Restaurantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo $url;?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                </svg></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  </header>
  <section>
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center ">
        <h1 class="text-center text-white">¡Bienvenido a<span style="color: #2874A6;"> Great</span>-Palate!</h1>
        <p class="text-white">Nos alegra que estés aquí, endulza tus fechas especiales con <span style="color: #2874A6;">Great</span> -Palate!. <br> Tenemos una comunidad enorme y apasionada. ¿Estás listo para deleitar tus ojos? </p>
      </div>
    </div>
  </section>
  <div class="container">
    <br />
  </div>