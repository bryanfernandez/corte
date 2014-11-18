<?php
//session_start();
class envio  extends conexion{
    
    
    public function __construct()
  {
     
    $this->host="localhost";
    $this->user="root";
    $this->pass="";
    $this->database="noticias";
 }
 
  
  
  
//////////////////////////////////////////////consultar login////////////////////////////////////////////////////
   public function logeo($Login,$PassUser) {
      $objconexion=new mysqli($this->host, $this->user, $this->pass, $this->database);
      $sql="SELECT LoginUser,PassUser FROM usuarios WHERE LoginUser='".$Login ."'AND PassUser='".$PassUser."' "  ;
      $resultado=$objconexion->query($sql)  ;
       while($apre=$resultado->fetch_array()){
       if ( ( $apre['LoginUser']=$Login )&&( $apre['PassUser'] =$PassUser) ) {
        
         header ("Location:Vista/php/principal.php");
                       }
                   else{
                header ("Location:index.php");
                   }
                   }  }         
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////77
 
   /////////////////////////////////////////////consultar ID///////////////////////////////////////////////////
 public function consultarid() {
     
      $objconexion=new mysqli($this->host, $this->user, $this->pass, $this->database);
      $sql="SELECT IdUser FROM usuarios WHERE LoginUser='".$_SESSION['usuario']."' ";
      $resultado=$objconexion->query($sql)  ;
      
         
     while($apre=$resultado->fetch_array()){
         return  $apre['IdUser'];
                 
         } 
         
         
     }       
   
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////77
   
                   
                   
    //////////////////////////////////////////////ingreso de usuario////////////////////////////////////////////////////////////////////////
     public function envioingreso($LoginUser,$PassUser,$NombreUser,$EmailUser) {
         
      $db = new mysqli($this->host, $this->user, $this->pass, $this->database);
      $query = "INSERT INTO usuarios (LoginUser,PassUser,NombreUser,EmailUser) VALUES ('".$LoginUser."','".$PassUser."','".$NombreUser."','".$EmailUser."');";
      $result = $db->query($query);
      if ($result)
        {
         echo $db->affected_rows." fila(s) afectada(s). Informaci&oacute;n insertada correctamente";
        
}
        else{
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
        }  }
//////////////////////////////////////////////////////////////////////////////////////////
//
 ////////////////////////////////////////ingresar noticia//////////////////////////////////////////////////////////////////////////////
         
         
      public function envionoticia($IdUser,$titu,$noti) {
      $db = new mysqli($this->host, $this->user, $this->pass, $this->database);
      $query = "INSERT INTO nuevanoticia (Iduser,TiTuloNuevaNoticia,RelatoNuevaNoticia) VALUES ('".$IdUser."','".$titu."','".$noti."');";
      
      $result = $db->query($query);
      if ($result)
        {
         echo $db->affected_rows." noticias  insertada correctamente";
}
        else{
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
        }  }
//////////////////////////////////////////////////////////////////////////////////////////
        
        
 ////////////////////////////////////////consulta noticia//////////////////////////////////////////////////////////////////////////////
     public function consultanoticias() {
         
        
     
      $objconexion=new mysqli($this->host, $this->user, $this->pass, $this->database);
      $sql="SELECT u.LoginUser,t.TituloNuevaNoticia, t.RelatoNuevaNoticia FROM nuevanoticia t,usuarios u WHERE t.IdUser=u.IdUser";
      $resultado=$objconexion->query($sql)  ;
      
         
      while($apre=$resultado->fetch_array()){
          echo "<form method='POST'>";
          echo"<h1 style=color:#fff;margin-left:25%;>".$apre['TituloNuevaNoticia']."</a></h1>";
          
          echo"<h3 style=color:black;margin-left:25%;>";      
		  echo "<br>";
          echo $apre['RelatoNuevaNoticia'];
          
           

                  echo "<br>";
		  echo "</h3>";
		  echo "<h5 style=color:#CC3300;margin-left:25%;>Noticia Publicada por el usuario  ";
		  echo $apre['LoginUser'];
		  echo "<img src='../img/like.png'/>";
                  
                  echo "<input type='submit' name='boton' value='ME GUSTA'>";
                  echo "<label name='label'></label>";
                  echo "</form>"; 
		  echo "</h5>";
		  echo "<HR width=70% align='center'>";
		  echo "<HR width=70% align='center'>";
                  
               
                      
                
                    
           /*       
            if ( isset( $_POST['boton']) &&isset( $_POST['boton'.$i]) ) { 
                echo "<h5 style=color:#CC3300;margin-left:55%;margin-top:-4%;>";
                echo "Le gusta a ";
                echo $_SESSION['usuario'];
                echo "</h5>";}
              */    
          

    
                    
                    
          
              }
         
         
     }       
//////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        

}
?>