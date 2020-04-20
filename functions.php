<?php

require 'admin/config.php';

function conexion($bd_config) {
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	}catch (PDOException $e) {
		return false;
	}
 }


function limpiarDatos($datos) {
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
 }


function paginaActual() {
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerPost($post_por_pagina, $conexion) {
	$inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function numeroPaginas($post_por_pagina, $conexion) {
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post ->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function idArticulo($id) {
	return (int)limpiarDatos($id);
} 

function obtener_post_por_id($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return($resultado) ? $resultado : false;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";

	return $fecha;
}

function comprobarSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: '. RUTA);
	}
}

?>