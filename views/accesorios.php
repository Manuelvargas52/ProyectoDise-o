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
      <h2 class="page-header">COMPONENTES Y ACCESORIOS</h2>
    </div>
    </div>
    </div>
    </div>
    
    
</div>
<main   >
    <div class="row row-cols-1 row-cols-md-4 mb-4 text-center" >
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 400px">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Audifonos Gamer </h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/audifonos.jpg"  alt="Wacom Bamboo Tablet" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            $75,000
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 360px">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Memoria RAM Trident Z RGB gamer color negro 16GB</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/memoria.jpg"  alt="iMac Desktop Computer" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $409.786
				</dt>
				
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary" style="width: 353px">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">ZOTAC GAMING GeForce RTX 3080 </h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/zotac3080.jpg"  alt="Smartphone MTK6572 " />

            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $3,872,636
				</dt>
			
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
        
      </div>
      <div class="row row-cols-4 row-cols-md-2 mb-4 text-center">
      <div class="col">
        <div class="card mb-4 rounded-2 shadow-sm" style="width: 363px">
          <div class="card-header py-2">
            <h4 class="my-0 fw-normal">Mouse Gamer Con Led Multicolor Alambrico</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/mouse.jpg"  alt="DualShock Controller for PlayStation 4" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $130.501
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
  <main   >
    <div class="row row-cols-1 row-cols-md-4 mb-4 text-center" >
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 400px">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Tarjeta Grafica Nvidia Geforce Rtx 3050 Zotac 8gb Twin Edge </h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/tarjeta.jpg" alt="Camara Nikon Reflex D7200 + Lente 18-140" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
				<dt>
				$2.199.900
				</dt>
				
				
				
        
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
        </div>
      </div>
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm" style="width: 360px">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Motospeed Teclado Mecanico Gamer Inalambrico Blue Switches</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/teclado.jpg" alt="Notebook Asus X507UA Intel Core i3 4GB RAM " />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            <dt>
            $373.900
				</dt>
			
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
      </div>
      <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary" style="width: 275px" >
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Kit de parlantes gamer para pc 8W con luces VTA</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/parlantes.jpg"  alt="Asus Transformer Pad Tablet" />
            <ul class="list-unstyled mt-3 mb-4">
            <dl>
            $69.900
				</dt>
				
			</dl> 
            </ul>
            <a class="btn btn-primary" href="venta1.php" role="button">Agregar al carro</a>
          </div>
        </div>
        
      </div>
      <div class="row row-cols-3 row-cols-md-1 mb-3 text-center">
      <div class="col">
      <div class="card mb-3 rounded-1 shadow-sm" style="width: 280px">
          <div class="card-header py-1">
            <h4 class="my-0 fw-normal">Silla Ergonómica Gaming</h4>
          </div>
          <div class="card-body">
          <img class="img-fluid img-portfolio img-hover mb-3" src="../img/silla.jpg"  alt="Asus Transformer Pad Tablet" />
            <ul class="list-unstyled mt-1 mb-2">
            <dl>
            <dt>
            $599.900
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

</div><div id='component-77796'>




  </div>

</div>

</div></div>



<script src="../js/bootstrap.min.js"></script>

</body>
