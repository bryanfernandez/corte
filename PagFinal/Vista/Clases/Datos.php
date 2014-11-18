<?php


 class Datos {
    
   public $user;
    
    public function __construct($u) {
       $this->user = $u;
      
    }
    
    public function setruser($us) {
        
        
        $this->user=$us;
         
    }    
    
        
        public function getuser() {
        
       
        return  $this->user;
        
    }
    
    
    
    
    
    
    
}
