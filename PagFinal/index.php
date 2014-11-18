<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="Vista/css/estilologin.css" rel="stylesheet" media="screen">
</head>

<body>
    <div class="titulo">
        <h2><u>APLICACION WEB SERVICES</u></h2> 
    </div>
    <div class="contenido">
        
        <form  name="logeo" method="POST" >
            <label>Usuario</label><br>
                <input  type="text" name="usuario"><br><br>
                    <label>Contraseña</label><br>
            <input type="password" name="pass"><br>
            
            
            <input type="submit" value="ingresar" name="logeo"><br>
                    
                    <h4></h4>
                          
                  
                    
        </form>
    </div>
    <div class="logo">   
                    </div>   
    

<?php

include_once "Vista/Clases/cargar.php";
?>
    
    <?php
    session_start();
$cone = new Conexion();
$cone->conectar();

if ( isset( $_POST['logeo']) ) { 
$_SESSION['usuario']=$_REQUEST['usuario'];
$_SESSION['clave']=$_REQUEST['pass'];
   // $user= $_POST['usuario']; 
   //  $pass= $_POST['pass']; 
     
    // $datousuario=new Datos($user);
    // $datousuario->setruser($user);
     
      
     
     
  $datologin = new envio();
  $datologin->logeo($_SESSION['usuario'],$_SESSION['clave']);
  
          
 
    
}else{
   
}


?>
    
    
    
    
</body>
</html>