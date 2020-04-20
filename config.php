<?php

//aqui se guardan los datos del administrador, que tambien se puede hacer en una bd
if(!defined('RUTA')){
  define('RUTA', 'http://localhost/curso_php/Practicas/blog');
}

$bd_config = array('basedatos' => 'curso_blog', 'usuario' => 'root', 'pass' => '');

$blog_config = array('post_por_pagina' => '2', 'carpeta_imagenes' => 'imagenes/');

$blog_admin = array('usuario' => 'Carlos', 'password' => '123');

?>