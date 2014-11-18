<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="../css/estiloprincipal.css" rel="stylesheet" media="screen">
</head>

    <body>
     
        <div  class="encabezado">
            </div>
      
       <nav class="me">

<ul class="mi-menu">


  <li><a href="principal.php"> INICIO</a>
    <li><a href="noticias.php"> REGISTRAR NOTICIAS</a>  </li>
  <li><a href="usuarios.php"> REGISTRAR USUARIOS </a>  </li>
    
      
</ul>

</nav> 



        <h2 style="color:#FFF;"> Usuario<br />
       <?php session_start(); echo  $_SESSION['usuario'];?>
        </h2>
         
        
        
        <p>
         
        <?php  require_once  "../Clases/cargar.php";?>
        <?php
        $dato=new envio();
        $dato->consultanoticias();
        ?>
        </p>
         
       
    </body>
</html>

