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
    <title>KonEventos</title>
    <link rel="icon" type="imagen/x-icon" href="../img/logo.jpg">


</head>

<body>

    <div>
        <header>
            <nav>
                <a href="index.html" class="logo">
                    <img src="../img/logo.jpg" alt="logo de la compañia">
                    <h2 class="nombre-empresa">Konrad Teck</h2>
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html">INICIO</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="servicios.html">PC GAMER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="personal.html">PC PARA TRABAJO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="empleos.html">COMPONENTES Y ACCESORIOS</a>
                      </li>
                          <li><a class="dropdown-item" href="opiniones.html">ARMA TU EQUIPO</a></li>
                          <li><a class="dropdown-item" href="acercade.html">A CERCA DE </a></li>
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
      <img src="../img/imagen2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
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
            <div class="col-md-12">
                <img src="img/principalarcade.jpg" height="450px" width="100%" class="imgprincipal">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 23rem;">
                    <img src="img/acercade1.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <h2>Vision</h2>
                        <p class="card-text">nuestra visión es ser una de las mejores páginas web organizando
                            reuniones sociales para celebrar festividades y que la gente se sienta satisfecha

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 23rem;">
                    <img src="img/acercade2.jpg" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                        <h2>Historia</h2>
                        <p class="card-text">Creada a principios de 2020 con la finalidad de ser una de las mejores 
                            opciones al momento de organizar una festividad 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 23rem;">
                    <img src="img/acercade3.jpg" class="card-img-top" height="300px">
                    <div class="card-body">
                        <h2>misión</h2>
                        <p class="card-text">ser una página influyente que cree espacios de esparcimiento
                            para toda la comunidad comprometiéndonos con la sociedad

                        </p>
                    </div>
                </div>
            </div>
        </div>

               

            </div>
               <script src="js/bootstrap.min.js"></script>


</body>
            <div>
                <h1 class="titulo">
                    ¡Organiza Tus eventos con nosotros!
                </h1>
                <p class="texto">
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

    <script src="js/bootstrap.min.js"></script>


</body>