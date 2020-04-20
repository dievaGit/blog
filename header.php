<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo RUTA; ?>/css/styles.css">
   <title>Blog</title>
  
</head>
<body>
    <header>
       <div class="contenedor">
           <div class="logo izquierda">
              <p><a href="<?php echo RUTA; ?>/login.php">Mi Primer Blog</a></p>
           </div>
      
           <div class="derecha">
               <form name="busqueda" class="buscar"  action="<?php echo RUTA; ?>/buscar.php" method="get">
                  <input type="text" name="busqueda" placeholder="Buscar">
                  <button type="submit" class="icono fa fa-search"></button>
               </form>

               <nav class="menu">
                  <ul>
                      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#">Contacto<i class="fa fa-envelope"></i></a></li>
                  </ul>
               </nav>   
           </div>

       </div>
   </header>
   