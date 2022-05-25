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
<body>
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
                          <li><a class="dropdown-item" href="armar.php">ARMA TU EQUIPO</a></li>
                          <li><a class="dropdown-item" href="acerca_de.php">A CERCA DE </a></li>
                        </ul>
                      </li>
                    </ul>
                    <i class="bi bi-person-circle"></i>
                  </div>
                </div>
              </nav>
</header>
  <div class="container">
  <div class="row">
    <div class="col-9">.col-9</div>
    <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
    <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
  </div>
</div>             
<script src="../js/bootstrap.min.js"></script>

</body>
