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
<body >
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
     
  <main   >
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" >
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Baja </h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/pc1.png"  alt="Smartphone MTK6572 " />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
				<dt>
					Procesador
				</dt>
				<dd>
			Intel Core I5 10400
				</dd>
				<dt>
					Board
				</dt>
				<dd>
				Asus Prime B560M-A
				</dd>
				
				<dt>
        disco Duro
				
				</dt>
				<dd>
				DD 200 GB Sata Toshiba
				</dd>
				<dt>
					Unidad (SSD)
				</dt>
				<dd>
          256 CB XPG ASX6000 PRO
				</dd>
        <dt>
          Memoria RAM
				</dt>
				<dd>
          DDR4 8GB 3200 ADATA
				</dd>
        <dt>
          Chip Grafico
 				</dt>
				<dd>
Ony Ctx 1650 4GB	
			</dd>
        
			</dl> 
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Media</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/pc2.png"  alt="Smartphone MTK6572 " />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
					Procesador
				</dt>
				<dd>
			Intel Core I5 10400
				</dd>
				<dt>
					Board
				</dt>
				<dd>
				Asus Prime B560M-A
				</dd>
				
				<dt>
        disco Duro
				
				</dt>
				<dd>
				DD 200 GB Sata Toshiba
				</dd>
				<dt>
					Unidad (SSD)
				</dt>
				<dd>
          256 CB XPG ASX6000 PRO
				</dd>
        <dt>
          Memoria RAM
				</dt>
				<dd>
          DDR4 8GB 3200 ADATA
				</dd>
        <dt>
          Chip Grafico
 				</dt>
				<dd>
Ony Ctx 1650 4GB	
			</dd>
			</dl> 
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Alta</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/pc3.jpg"  alt="Smartphone MTK6572 " />

            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
					Procesador
				</dt>
				<dd>
			Intel Core I5 10400
				</dd>
				<dt>
					Board
				</dt>
				<dd>
				Asus Prime B560M-A
				</dd>
				
				<dt>
        disco Duro
				
				</dt>
				<dd>
				DD 200 GB Sata Toshiba
				</dd>
				<dt>
					Unidad (SSD)
				</dt>
				<dd>
          256 CB XPG ASX6000 PRO
				</dd>
        <dt>
          Memoria RAM
				</dt>
				<dd>
          DDR4 8GB 3200 ADATA
				</dd>
        <dt>
          Chip Grafico
 				</dt>
				<dd>
Ony Ctx 1650 4GB	
			</dd>
			</dl> 
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
        
      </div>
      
      
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Oficina</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/oficina.png"  alt="Smartphone MTK6572 " />

            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
					Procesador
				</dt>
				<dd>
			Intel Core I5 10400
				</dd>
				<dt>
					Board
				</dt>
				<dd>
				Asus Prime B560M-A
				</dd>
				
				<dt>
        disco Duro
				
				</dt>
				<dd>
				DD 200 GB Sata Toshiba
				</dd>
				<dt>
					Unidad (SSD)
				</dt>
				<dd>
          256 CB XPG ASX6000 PRO
				</dd>
        <dt>
          Memoria RAM
				</dt>
				<dd>
          DDR4 8GB 3200 ADATA
				</dd>
        <dt>
          Chip Grafico
 				</dt>
				<dd>
Ony Ctx 1650 4GB	
			</dd>
			</dl> 
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
</div>

    

        
      </table>
    </div>
  </main>
<script src="../js/bootstrap.min.js"></script>
<script src="../css/styles.css"></script>
<script src="../css/bootstrap.min.css
"></script>

</body>
