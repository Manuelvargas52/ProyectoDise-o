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
<div class="row g-5">
   

        <
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">INFORMACION</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">NOMBRES</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
             
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">APELLIDOS</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              
            </div>

            

            

            <div class="col-12">
              <label for="address" class="form-label">DIRECCION</label>
              <input type="text" class="form-control" id="address"  required>
             
            </div>

            

            <div class="col-md-5">
              <label for="country" class="form-label">PAIS</label>
              <select class="form-select" id="country" required>
                <option value="">ESCOGER</option>
                <option>COLOMBIA</option>
              </select>
              
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">CIUDAD</label>
              <select class="form-select" id="state" required>
                <option value="">ESCOGER</option>
                <option>BOGOTA</option>
                <option>CALI</option>
              </select>
             
            </div>

            

          <hr class="my-4">

          

          <hr class="my-4">

          <h4 class="mb-3">PAGO</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">TARJETA DE CREDITO</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">TARJETA DEBITO</label>
            </div>
           
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">NOMBRE DE LA TARJETA</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">NUMERO DE LA TARJETA</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
             
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">FECHA DE EXPIRACION</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV- codigo de seguridad</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Realizar compra</button>
        </form>
      </div>
    </div>
  </main>



    <script src="../js/bootstrap.min.js"></script>


</body>