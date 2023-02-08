<?php
include_once('db/database_utilities.php');
if( $_POST ){
  header('Location: index.php');
  $actividad = isset( $_POST['actividad'] ) ? $_POST['actividad'] : '';
  $fecha = isset( $_POST['fecha'] ) ? $_POST['fecha'] : '';
  $hora = isset( $_POST['hora'] ) ? $_POST['hora'] : '';
  $intensidad = isset( $_POST['intensidad'] ) ? $_POST['intensidad'] : '';
  $calificacion = isset( $_POST['calificacion'] ) ? $_POST['calificacion'] : '';
  $observacion = isset( $_POST['observacion'] ) ? $_POST['observacion'] : '';

  add( $actividad, $fecha, $hora, $intensidad, $calificacion, $observacion );
  die();
}

?>
<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nuevo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <style>
      .banner-image {
        background-image: url('img/12.png');
        background-size: cover;
      }
    </style>
  
  </head>
  <body>
<nav class="fixed-top">
<div style="background-image: radial-gradient(circle at 32.3% 60.22%, #b3ffff 0, #81f7ff 25%, #1ed2f3 50%, #00aedb 75%, #0092cb 100%);">  
<ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link bg-success text-white" href="new_user.php">
<img src="img/add.png" alt="YNV@vanclama" width="50" height="50">
</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">
<img src="img/list.png" alt="YNV@vanclama" width="55" height="50">
</a>
  </li>
  <li class="nav-item">
     <img src="img/logo-3.png" alt="YNV@vanclama" width="120" height="60">
  </li>

<li class="nav-item">
    <a class="nav-link text-white disabled">
<img src="img/update.png" alt="YNV@vanclama" width="50" height="50">
</a>
  </li>

</ul>
<div>
</nav>
      <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Nuevo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
<form class="row g-3 need-validation" method="post" novalidate>
  <div class="col-md-12">
    <label for="validationServer01" class="form-label">Actividad</label>
    <input type="text" name="actividad" placeholder="" class="form-control is-valid" id="validationServer01" required>
<div class="valid-feedback">
      Bien!
    </div>  
</div>
  <div class="col-md-12">
    <label for="validationServer02" class="form-label">Fecha</label>
    <input type="date" name="fecha" placeholder="" class="form-control is-valid" id="validationServer02" required>
    
  </div>


 <div class="col-md-12">
    <label for="validationServer02" class="form-label">Hora</label>
    <input type="number" name="hora" placeholder="" class="form-control is-valid" id="validationServer02" required>
    
  </div>


 <div class="col-md-12">
    <label for="validationServer02" class="form-label">Intensidad</label>
    <input type="number" name="intensidad" placeholder="" class="form-control is-valid" id="validationServer02" required>
  </div>


 <div class="col-md-12">
    <label for="validationServer02" class="form-label">Calificacion</label>
    <input type="number" name="calificacion" placeholder="" class="form-control is-valid" id="validationServer02" required>
   
  </div>


 <div class="col-md-12">
    <label for="validationServer02" class="form-label">Observacion</label>
    <input type="text" name="observacion" placeholder="" class="form-control is-valid" id="validationServer02" required>
   
  </div>
  
  <div class="col-md-12">
    <button class="btn btn-primary" type="submit">Agregar
</button>
  </div>
</form>

      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
<img src="img/add.png" alt="YNV@vanclama" width="100" height="100">
Nuevo Registro
</button>
  
 
    
</div>
</div>
<!-- Copyright -->
  <div class="text-center p-3 " style="background-image: linear-gradient(225deg, #81471b 0, #7a3d1c 10%, #70331c 20%, #63281a 30%, #541d17 40%, #421212 50%, #310808 60%, #250000 70%, #1b0000 80%, #0d0000 90%, #000000 100%);">
    <a class="text-white" href="http://ynv-servis.tech/">Yovan Ramon Yaune Enovore © 2023 Todos los derechos reservados YNV</a>
  </div>
  <!-- Copyright -->
 	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

