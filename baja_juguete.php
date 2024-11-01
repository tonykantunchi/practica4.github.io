<?php
if (!isset($_POST["id_producto"])) {
    exit("No hay datos");
}
include_once "metodos.php";
bajaJuguete($_POST["id_producto"]);
header("Location: juguetes.php");
?>