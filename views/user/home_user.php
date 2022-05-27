<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');

include(VIEWS_PATH . "header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Konrad Teck</title>
    <link rel="icon" type="imagen/x-icon" href="../img/logo.jpg">


</head>

<body style="background-color: #2b2d42;">

    <div>
        <header>
            <nav>
                <a href="inicio.php" class="logo">
                    <img src="../img/logo.jpg" alt="logo de la compañia">
                    <h2 class="nombre-empresa">Konrad Teck</h2>
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="inicio.php">INICIO</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pc_gamer.php">PC GAMER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pc_trabajo.php">PC PARA TRABAJO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="accesorios.php">COMPONENTES Y ACCESORIOS</a>
                      </li>
                          <li class="nav-item"><a class="nav-link" href="armar.php">ARMA TU EQUIPO</a></li>
                          <li class="nav-item" ><a class="nav-link" href="acerca_de.php">A CERCA DE </a></li>
                          <li class="nav-item" ><a class="nav-link" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg> </a></li>
                        </ul>
                      </li>
                    </ul>
                    <i class="bi bi-person-circle"></i>
                  </div>
                </div>
              </nav>
        </header>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/imagen1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/imagen2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/imagen3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        <div>
<br>

<div class="container-fluid">

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 23rem;">
                    <img src="../img/cpu.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <h2>CPU GAMER</h2>
                        <p class="card-text">AMD RYZEN 3600, DISCO DURO: 240GB,
                          16GB RAM, BOARD GIGABYTE B450 DS3H
GRAFICOS GEFORCE 1030 2 GB
<br>
<a class="btn btn-primary" href="pc_gamer.php" role="button">VER MÁS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 23rem;">
                    <img src="../img/tarjeta.jpg" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2>TARJETA GRAFICAS</h2>
                        <p class="card-text">la tarjeta de video sirve para que puedas disfrutar a 
                          lo grande de todos tus videojuegos, así como para utilizar aplicaciones para editar fotografías o videos 
                          <br>
                          <a class="btn btn-primary" href="accesorios.php" role="button">VER MÁS</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 23rem;">
                    <img src="../img/mouse.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <h2>ACCESORIOS</h2>
                        <p class="card-text">Los accesorios ter permitiran una mayor usabilidad con tu PC, contamos con mouse, teclados,
                          tarjetas graficas, diademas
                          <br>
                          <a class="btn btn-primary" href="accesorios.php" role="button">VER MÁS</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>

               

            </div>
               <script src="js/bootstrap.min.js"></script>


</body   >
            <div>
                <h1 class="titulo" style="color:white">
¡Pregunta por nuestros productos de excelente calidad!                </h1>
                <p class="texto" style="color:white">
                    Durante la pandemia del covid-19 se logro llegar a la conclusion que el dicho
                    "disfruta todos los dias como si fuera el ultimo", tiene mucha razon. Algunas familias perdieron
                    familiares o personas cercanas, la mayoria con el pensamiento de "no disfrute los momentos
                    especiales con ellos", por esta razon nace KonEventos una empresa que tiene como objetivo
                    hacer cada momento especial, deja en nuestras manos tus eventos, los 
                    convertiremos en eventos unicos y especiales. No lo dudes! Cotiza con nosotros tus eventos.

                </p>
                <div class="grid-container2">
                    <button type="button" class="col-md-12 btn-primary"><a href="acercade.html"
                            style="text-decoration: none;">Leer más</a></button>

                </div>

            </div>

        </div>

    </div>
    <hr>
<div class="container3" style="color:white">
  

</div>

  

    

    <script src="../js/bootstrap.min.js"></script>


</body>