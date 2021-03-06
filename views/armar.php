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
<body style="background-color: #2b2d42;" >
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
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
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
			 Amd Ryzen 5 3600g
				</dd>
				<dt>
					Board
				</dt>
				<dd>
        ASROCK B550 STEEL LEGEND
				</dd>
				
				<dt>
        disco Duro
				
				</dt>
				<dd>
        DD 2000 GB SATA SEAGATE BARRACUDA
				</dd>
				<dt>
					Unidad (SSD)
				</dt>
				<dd>
        256 GB XPG ASX6000 PRO
				</dd>
        <dt>
          Memoria RAM
				</dt>
				<dd>
        DDR4 16GB 2x8 3200
				</dd>
        <dt>
          Chip Grafico
 				</dt>
				<dd>
	
PNY GTX 1660 SUPER 6GB DDR6 SINGLE FAN</dd>
<dt>
Refrigeración
 				</dt>
				<dd>
	
        POWER GROUP MAGIC 120 RGB</dd>
			</dl> 
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
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
        AMD RYZEN R5 5600G
				</dd>
				<dt>
					Board
				</dt>
				<dd>
        ASUS PRIME B550M-K 
				</dd>
				
				<dt>
        disco Duro
				
				</dt>
				<dd>
        DD 2000 GB SATA SEAGATE BARRACUDA
				</dd>
				<dt>
					Unidad (SSD)
				</dt>
				<dd>
        256 GB XPG ASX6000 PRO
				</dd>
        <dt>
          Memoria RAM
				</dt>
				<dd>
        DDR4 8GB 3600 PATRIOT VIPER STEEL RGB
			
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
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
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
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
