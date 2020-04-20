<?php session_start();

//Archivo index del ADMIN

require 'config.php';

require '../functions.php';


$conexion = conexion($bd_config);

//Comprobar Sesion
comprobarSession();

if (!$conexion) {
  header('Location: ../error.php');
}

$posts = obtenerPost($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';
?>