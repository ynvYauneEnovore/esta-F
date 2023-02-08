<?php
include_once('db/database_utilities.php');
$result = run_query();

?>
<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registros</title>
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
    <a class="nav-link text-white" href="new_user.php">
<img src="img/add.png" alt="YNV@vanclama" width="50" height="50">
</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-success" href="index.php">
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

<div class="container">
        <h1>Listado:</h1>
            <table class="table">
  	        <thead class="table-light">
    		    <tr>
                        <th width="80">ID</th>
                        <th width="150">Actividad</th>
		        <th width="80">Fecha</th>
		        <th width="50">Hora</th>
		        <th width="50">Intensidad</th>
		        <th width="50">calificacion</th>
			<th width="150">observacion</th>
			<th width="130">Acciones</th>
                    </tr>
  	        </thead>
  	        <tbody>
		     <?php 
                  while($act = $result->fetch_assoc())
                  {
                  ?>
                  <tr>
                    <td><?php echo $act['id_actividad']; ?></td>
                    <td><?php echo $act['actividad']; ?></td>
                    <td><?php echo $act['fecha']; ?></td>
			<td><?php echo $act['hora']; ?></td>
			<td><?php echo $act['intensidad']; ?></td>
			<td><?php echo $act['calificacion']; ?></td>
			<td><?php echo $act['observacion']; ?></td>
                    <td>
			<button type="button" class="btn btn-primary btn-sm">
				<a class="link-light" href="./details.php?id_actividad=<?php echo $act['id_actividad']; ?>">Detalles</a
			</button>
			<button type="button" class="btn btn-primary btn-sm">
                   		 <a class="link-light" href="./delete.php?id_actividad=<?php echo $act['id_actividad']; ?>">Eliminar</a>
			</button>
                     
                    </td>
                    
                  </tr>
                  <?php
                }
                  ?>
  	</tbody>
	</table>
     </div>
</div>
</div>
 <!-- Copyright -->
  <div class="text-center p-3 " style="background-image: linear-gradient(225deg, #81471b 0, #7a3d1c 10%, #70331c 20%, #63281a 30%, #541d17 40%, #421212 50%, #310808 60%, #250000 70%, #1b0000 80%, #0d0000 90%, #000000 100%);">
    <a class="text-white" href="http://ynv-servis.tech/">Yovan Ramon Yaune Enovore © 2023 Todos los derechos reservados YNV</a>
  </div>
  <!-- Copyright -->
 	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

