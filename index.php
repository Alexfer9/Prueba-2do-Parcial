<?php
require_once("db/db.php");
require_once("controllers/motos_controller.php");
?>

<?php

require_once("db/db.php");
class MotoUpdate{
    public static function mdlMostrarMotos(){
        $conexion = Conectar::conexion();
        $id=$_POST['ID'];
        $nombre=$_POST['NOMBRE'];
        $marca=$_POST['MARCA'];
        $precio=$_POST['PRECIO'];
        $stock=$_POST['STOCK'];


$sql="UPDATE motos SET  STOCK='$stock',PRECIO='$precio' WHERE ID='id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: motos_view.phtml");
    }
    }
}
?>

<?php
require_once("db/db.php");

class MotoDelete {
    public static function conexion() {
        $conexion = new mysqli("localhost", "root", "", "motos");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

    public static function eliminarMoto($id) {
        $conexion = self::conexion();
        $sql = "DELETE FROM motos WHERE ID = '$id'";
        $query = mysqli_query($conexion, $sql);

        if ($query) {
            header("Location: motos_view.phtml");
        }
    }
}
?>

<?php
require_once("db/db.php");
class MotoInsert{
    public static function mdlIngresarMotos(){
        $conexion = Conectar::conexion();

$id=$_POST['ID'];
$nombre=$_POST['NOMBRE'];
$marca=$_POST['MARCA'];
$precio=$_POST['PRECIO'];
$stock=$_POST['STOCK'];


$sql="INSERT INTO motos VALUES('$id','$nombre','$marca','$precio'.'$stock')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: motos_view.phtml");
    
}
}
}
?>