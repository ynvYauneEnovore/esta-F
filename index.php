<?php
include_once('db/gasto.php');
if( $_POST ){
  header('Location: index.php');
  $gasto = isset( $_POST['gasto'] ) ? $_POST['gasto'] : '';
  $descripcion_gasto = isset( $_POST['descripcion_gasto'] ) ? $_POST['descripcion_gasto'] : '';
  $precio = isset( $_POST['precio'] ) ? $_POST['precio'] : '';
  $hora = isset( $_POST['hora'] ) ? $_POST['hora'] : '';
  $fecha = isset( $_POST['fecha'] ) ? $_POST['fecha'] : '';

  add( $gasto, $descripcion_gasto, $precio, $hora, $fecha );
  die();
}
?>

<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nuevo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       <link href="css/ico/css/fontawesome.css" rel="stylesheet">
       <link href="css/ico/css/brands.css" rel="stylesheet">
       <link href="css/ico/css/solid.css" rel="stylesheet">
       <link rel="icon" href="img/add.png" type="image/icon type">
       <style>
           .banner-image {
                background-image: url('img/fondo.png');
                background-size: cover;
            }
       </style>
    </head>
    <body>
        <nav class="navbar bg-body-tertiary fixed-top justify-content-center" style="background-image: radial-gradient(circle at -0.9% 58.97%, #cdffc7 0, #b8ffce 12.5%, #9affd1 25%, #6fffcf 37.5%, #00ffca 50%, #00eec6 62.5%, #00e1c9 75%, #00d9d2 87.5%, #00d6df 100%);">


	    <div class="justify-content-center">
                <ul class="nav nav-pills">
                    <li class="nav-item p-md-4">
                        <a class="nav-link active" aria-current="page" href="#">Agregar</a>
                    </li>
                    <li class="nav-item p-md-4">
                        <a class="nav-link" href="#">Listar</a>
                    </li>
                    <li class="nav-link p-md-4">
                        <a class="navbar-brand" href="#">
			<img src="img/3.png" width="80" height="70">
		        </a>
                    </li>
                    <li class="nav-item p-md-4">
                        <a class="nav-link" href="#">Editar</a>
                    </li>
                  
                    <li class="nav-item p-md-4">

<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li> 
       </ul>
   </div>
</div>
    </li>
</li>

</nav>
</div> 
<!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content d-flex">
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Nuevo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        
<form class="row g-3 need-validation" method="post" novalidate>

<div class="col-md-6">
     <label for="validationServerUsername" class="form-label">Gasto</label>
	<div class="input-group has-validation">
	    <span class="input-group-text" id="inputGroupPrepend3">
		<i class="fa-regular fa-money-bill-transfer fa-2x"></i>
	    </span>
      	    <input type="text" name="gasto" placeholder="" class="form-control" id="validationServer01" required>
        </div>
</div>

<div class="col-md-6">
     <label for="validationServer02" class="form-label">Descripci&oacute;n de gasto</label>
	<div class="input-group has-validation">
	    <span class="input-group-text" id="inputGroupPrepend3">
		<i class="fa-solid fa-circle-info fa-2x"></i>
	    </span>
      	    <input type="text" name="descripcion_gasto" placeholder="" class="form-control" id="validationServer02" required>
        </div>
</div>

<div class="col-md-6">
     <label for="validationServer02" class="form-label">Precio</label>
	<div class="input-group has-validation">
	    <span class="input-group-text" id="inputGroupPrepend3">
		<i class="fa-regular fa-money-bill-wave fa-2x"></i>
	    </span>
      	    <input type="number" name="precio" placeholder="" class="form-control" id="validationServer02" required>
        </div>
</div>

<div class="col-md-6">
     <label for="validationServer02" class="form-label">Prioridad</label>
	<div class="input-group has-validation">
	    <span class="input-group-text" id="inputGroupPrepend3">
		<i class="fa-solid fa-signs-post fa-2x"></i>
	    </span>
      	    <input type="number" name="prioridad" placeholder="" class="form-control" id="validationServer02" required>
        </div>
</div>


<div class="col-md-6">
     <label for="validationServer02" class="form-label">Hora</label>
	<div class="input-group has-validation">
	    <span class="input-group-text" id="inputGroupPrepend3">
		<i class="fa-regular fa-clock fa-2x"></i>
	    </span>
      	   <input type="time" name="hora" placeholder="" class="form-control" id="validationServer02" required>
        </div>
</div>

<div class="col-md-6">
     <label for="validationServer02" class="form-label">Fecha</label>
	<div class="input-group has-validation">
	    <span class="input-group-text" id="inputGroupPrepend3">
		<i class="fa-solid fa-calendar-days fa-2x"></i>
	    </span>
      	    <input type="date" name="fecha" placeholder="" class="form-control" id="validationServer02" required>
        </div>
</div>

  <div class="col-md-12">
    <button class="btn btn-success" type="submit">Enviar</button>
</div>

  </div>
</form>

</div>

</div>

</div>    

<button class="btn bg-warning" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
<h3> <i class="fa-solid fa-circle-plus fa-2x"></i> Nuevo Registro</h3>
</button>

  </div> 
</div>
</div>
<!-- Copyright -->
  <div class="text-center p-5" style="background-color: #00BFA7;">  
	<div class="container">
	<p class="h6">esta-F &copy; Copyright <?php echo date('Y'); ?> Todos los Derechos Reservados.</p>

	<hr>
<p><abbr title="Dev Yovan Enovore" class="initialism">esta-F</abbr></p>
Licencia del c&oacute;digo  <i class="fa-solid fa-m" style="color: #FFC107"></i>
<i class="fa-solid fa-i" style="color: #FFC107"></i>
<i class="fa-solid fa-t" style="color: #FFC107"></i>, docs <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png"/></a> <a class="link-dark" rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">CC BY 4.0</a>.
	
	<hr>	

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
     
<a class="link-dark" href="https://github.com/ynvYauneEnovore">
<i class="fa-brands fa-github fa-3x fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; "></i>
</a>

    </div>

    <div class="col">

<a class="link-dark" href="https://www.facebook.com/ynvyvn/">
<i class="fa-brands fa-facebook fa-3x fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; "></i>
</a>

    </div>

<div class="col">


<a class="link-dark" href="mailto:yovanuxf@gmail.com?Subject=system%esta-f%contact">
<i class="fa-brands fa-google-plus fa-3x fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; "></i>
</a>


    </div>

<div class="col">

<a class="link-dark" href="https://www.instagram.com/ynvenovore/">
<i class="fa-brands fa-instagram fa-3x fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; ""></i>
</a>

    </div>

<div class="col">


<a class="link-dark" href="https://www.linkedin.com/in/yovan-r-yaune-enovore-176817167/">
<i class="fa-brands fa-linkedin-in fa-3x fa-bounce" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; ""></i>
</a>
    </div>

  </div>
</div>

</div>
  </div>
  <!-- Copyright -->
 	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

