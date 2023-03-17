<?php
//Llamada al modelo
require_once("models/motos_model.php");
$per=new motos_model();
$datos=$per->get_motos();
 
//Llamada a la vista
require_once("view/motos_view.phtml");
?>
