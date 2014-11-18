<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="../css/estilousuarios.css" rel="stylesheet" media="screen">
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
        
        <aside class="formulario">
<h1>ASIGNAR USUARIO</h1>


<form class="for" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="asignar">

<fieldset>
  
<label>Usuario</label><input type="text" name="user" style="margin-left:20px;width:150px;height:20px;" /></br>
<label>Contraseña</label><input type="password" name="pass" style="margin-left:20px;width:160px;height:20px;" /></br>
<label>Nombres </label><input type="text" name="nombre"style="margin-left:20px;width:200px;height:20px;" /></br>
<label>Email</label><input type="text" name="email" style="margin-left:20px;width:200px;height:20px;" /></br></br>







 <button class="submit" type="submit" name="enviar">Enviar</button>
  <button class="submit" type="submit" name="canc">Cancelar</button>
  
  <div class="logo">
  </div>

</fieldset>
</form>

</aside>


<div class = "user">
        
   </div>   
        
        
        <?php  include_once "../Clases/cargar.php";?>
        <?php

if ( isset( $_POST['user'] )&&( $_POST['pass'] )&&( $_POST['nombre'] )&&( $_POST['email'] ) ) { 
     $us= $_POST['user']; 
     $pass= $_POST['pass']; 
     $nombre=$_POST['nombre']; 
     $email=$_POST['email']; 
     
  $datologin = new envio();
  
  $datologin->envioingreso($us, $pass, $nombre, $email);
    
}else{
   
}


?>
        
        
    </body>
</html>

