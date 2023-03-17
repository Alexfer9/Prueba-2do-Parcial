<?php
class motos_model{
    private $db;
    private $motos;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->motos=array();
    }
    public function get_motos(){
        $consulta=$this->db->query("select * from motos;");
        while($filas=$consulta->fetch_assoc()){
            $this->motos[]=$filas;
        }
        return $this->motos;
    }
}
?>



