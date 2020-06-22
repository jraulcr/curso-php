
<?php

class Productos_modelo {
    private $db;
    private $productos;
    
   public function __construct() {
        require_once ("modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->productos=array();
    }
    
    function getProductos() {
        
        $consulta= $this->db->query("SELECT * FROM PRODUCTOS");
        
        while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
            
            $this->productos[]=$filas;
            
        }
        
        return $this->productos;
    }
   
}



?>
