<?php
include_once('db/database_utilities.php');
$id_actividad = isset( $_GET['id_actividad'] ) ? $_GET['id_actividad'] : '';
if( $_POST ){
  header('Location: index.php');
  $actividad = isset( $_POST['actividad'] ) ? $_POST['actividad'] : '';
  $fecha = isset( $_POST['fecha'] ) ? $_POST['fecha'] : '';
  $hora = isset( $_POST['hora'] ) ? $_POST['hora'] : '';
  $intensidad = isset( $_POST['intensidad'] ) ? $_POST['intensidad'] : '';
  $calificacion = isset( $_POST['calificacion'] ) ? $_POST['calificacion'] : '';
  $observacion = isset( $_POST['observacion'] ) ? $_POST['observacion'] : '';

 update( $id_actividad, $actividad, $fecha, $hora, $intensidad, $calificacion, $observacion );
  die();
}

$act = get_act_by_id( $id_actividad  );

?>
<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>edit</title>
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
    <a class="nav-link" href="index.php">
<img src="img/list.png" alt="YNV@vanclama" width="55" height="50">
</a>
  </li>
  <li class="nav-item">
     <img src="img/logo-3.png" alt="YNV@vanclama" width="120" height="60">
  </li>

<li class="nav-item">
    <a class="nav-link bg-success text-white disabled">
<img src="img/update.png" alt="YNV@vanclama" width="50" height="50">
</a>
  </li>

</ul>
<div>
</nav>

 <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">     

    <div class="row">
 
      <div class="large-9 columns">
        <h3>Modifica registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row">
                  <div class="large-12 columns">
                    <label>actividad
                      <input type="text" name="actividad" value="<?php echo $act['actividad']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>fecha
                      <input type="text" name="fecha" value="<?php echo $act['fecha']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
		<div class="row">
                  <div class="large-12 columns">
                    <label>hora
                      <input type="text" name="hora" value="<?php echo $act['hora']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>

		<div class="row">
                  <div class="large-12 columns">
                    <label>intensidad
                      <input type="text" name="intensidad" value="<?php echo $act['intensidad']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>

		<div class="row">
                  <div class="large-12 columns">
                    <label>calificacion
                      <input type="text" name="calificacion" value="<?php echo $act['calificacion']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>

		<div class="row">
                  <div class="large-12 columns">
                    <label>observacion
                      <input type="text" name="observacion" value="<?php echo $act['observacion']; ?>" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <input type="submit" class="button success" value="MODIFICAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>

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

