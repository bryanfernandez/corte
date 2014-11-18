<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="../css/estilonoticia.css" rel="stylesheet" media="screen">
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
         <div  class="encabezado">
            </div>
        
   <aside class="formulario">
<h1>CREAR UNA NOTICIA</h1>


<form class="for" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="asignar">

<fieldset>
  
<label >Titulo de noticia</label><input type="text" name="titulo" style="margin-left:20px;width:240px;height:20px;" /></br>

<label>Noticia</label></br>

<textarea   style="width:240px; height:120px; margin-left:155px;" name="noticia"  ></textarea><br/><br/><br/><br/>








 <button class="submit" type="submit" name="enviar" style="margin-left:100px">Enviar</button>
  <button class="submit" type="submit" name="canc">Cancelar</button>
  
  <div class="logo">
  </div>

</fieldset>
</form>

</aside>
               
      


 <?php include "../Clases/cargar.php";?>
   
<?php
  
        echo  $_SESSION['usuario'];  
        $dato = new envio();
       $y= $dato->consultarid();
       echo $y;
        

if ( isset( $_POST['titulo'] )&&( $_POST['noticia'] ) ) { 
     $titulo= $_POST['titulo']; 
     $noticia= $_POST['noticia']; 
     $_SESSION['ti']=$_REQUEST['titulo'];
    $_SESSION['no']=$_REQUEST['noticia'];
     
     $dato->envionoticia($y, $titulo, $noticia);
      
     
        
  
  
    
}else{
   
}


?>   
    
        
        
        
        
        
        
        
        
        
        
    </body>
</html>

