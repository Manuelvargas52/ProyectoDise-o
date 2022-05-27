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
    <title>PC GAMER</title>
</head>
<body  style="background-color: #2b2d42;">
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
<div class="container3 marketing">

<div class="row" >
  <div class="col-lg-4">

    <h2 style="color:white" >Manuel Vargas</h2>
    <h3 style="color:white">Analista de datos</h3>
    <p style="color:white" >Conocimiento necesario para realizar cualquier trabajo con eficiencia y a su vez capacidad de adquirir nuevos conocimientos y dar resultados de manera concreta, me destaco por la manera en la que logro 
      relacionarme de una forma asertiva, tengo gran manejo de los equipos de cómputo 
      y relacionados con la tecnología, Habilidades en atención al cliente mediante comunicación asertiva 
      y haciendo sentir al mismo en confianza para que sea más rápido y eficaz el trabajo tanto con el cliente como el autónomo. </p>
  </div>
  <div class="col-lg-4">

    <h2 style="color:white">Juan Pablo Sanchez</h2>
    <h3 style="color:white">Lider del proyecto</h3>
    <p style="color:white">Me caracterizo por ser una persona responsable y cumplidora con mis deberes. 
Soy una persona noble, humilde, honesta, respetuosa, y dispuesta siempre a 
colaborar en lo que sea necesario y cuando me necesiten. Apasionado por mi carrera y 
con ganas de aportar mi conocimiento. </p>
  </div>

</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading" style="color:white">Misión. </h2>
    <p class="lead" style="color:white">Ofrecer una amplia gama de productos electronicos, bien diseñados y funcionales.</p>
  </div>
  <div class="col-md-5">
<img src="../img/mision.jpg" alt="imagen de mision empresarial">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading" style="color:white">Visión. </h2>
    <p class="lead" style="color:white">KonradTeck espera ser una de las empresas lideres en el mercado de tecnología para el año 2030, aportando un buen servicio a los clientes, ademas
    se espera incursionar en mercados internacionales.</p>
  </div>
  <div class="col-md-5 order-md-1">
<img src="../img/vision.jpeg" alt="imagen de vision empresarial ">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading" style="color:white">KonradTeck </h2>
    <p class="lead" style="color:white">KonradTeck es una empresa encargada de la venta de productos electronicos
    en especial la venta de computadores y piezas. Esta empresa nace de la idea de querer ayudar a nuestros clientes a conseguir productos de excelente calidad
  y a los mejores precios. Contamos con aliados empresariales para partes de computadores. No dudes contactarnos! </p>
  </div>
  <div class="col-md-5">
<img src="../img/logo.jpg" alt="logo de la empresa">
  </div>
</div>

<hr class="featurette-divider">
<script src="../js/bootstrap.min.js"></script>

</body>
