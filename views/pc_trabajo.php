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
              <div id="featured-products-76145" class="container3">
  <div class="row">
    <div class="col-12">
      <h2 class="page-header">PC para trabajo</h2>
    </div>







</div>

</div></div>
   
<main   >
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" >
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Wacom Bamboo Tablet</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/trabajo.jpg"  alt="Wacom Bamboo Tablet" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
				<dt>
        $100.000
				</dt>
			
       
        
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Smartphone MTK6572 </h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/trabajo1.jpg"  alt="Smartphone MTK6572 " />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $500.000
				</dt>
			
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">iMac Desktop Computer</h4>
          </div>
          <div class="card-body">
          
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/trabajo3.jpg"  alt="iMac Desktop Computer" />

            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $1.200.000
				</dt>
				
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
            <h4 class="my-0 fw-normal">New Arrivals</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/trabajo4.jpg"  alt="Camara Nikon Reflex D7200 + Lente 18-140" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $1.290.000
				</dt>
				
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Notebook Asus X507UA Intel Core i3 4GB RAM</h4>
          </div>
          <div class="card-body">
         
<img class="img-fluid img-portfolio img-hover mb-3" src="../img/imagen3.jpg"  alt="Notebook Asus X507UA Intel Core i3 4GB RAM " />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $900.000
				</dt>
			
		
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      
      </div>
      
      
    </div>
   

    

        
      </table>
    </div>
  </main>
              
<script src="../js/bootstrap.min.js"></script>

</body>
