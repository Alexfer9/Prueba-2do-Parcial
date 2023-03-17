<?php
require_once("index.php");

if(isset($_POST['ID']) && isset($_POST['NOMBRE']) && isset($_POST['MARCA']) && isset($_POST['PRECIO']) && isset($_POST['STOCK'])){

    MotoInsert::mdlIngresarMotos();

}

?>