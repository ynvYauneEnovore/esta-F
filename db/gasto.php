<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM gasto LIMIT 0,3';
	return $mysqli->query($sql);

}

function add( $gasto, $descripcion_gasto, $precio, $hora, $fecha )
{
	global $mysqli;
	$sql = "INSERT INTO gasto (id_gasto, gasto, descripcion_gasto, precio, hora, fecha) VALUES (null, '{$gasto}', '{$descripcion_gasto}', '{$precio}', '{$hora}', '{$fecha}')";
	$mysqli->query($sql);

}

function update( $id_actividad, $actividad, $fecha, $hora, $intensidad, $calificacion, $observacion )
{
	global $mysqli;
	$sql = "UPDATE actividad SET actividad = '{$actividad}', fecha = '{$fecha}', hora = '{$hora}', intensidad = '{$intensidad}', calificacion = '{$calificacion}', observacion = '{$observacion}' WHERE id_actividad = {$id_actividad}";
	$mysqli->query( $sql );

}

function delete( $id_actividad )
{
	global $mysqli;
	$sql = "DELETE FROM actividad WHERE id_actividad = {$id_actividad}";
	$mysqli->query($sql);
}

function get_act_by_id( $id_actividad )
{
	global $mysqli;
	$sql = "SELECT * FROM actividad WHERE id_actividad = {$id_actividad}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;

}



