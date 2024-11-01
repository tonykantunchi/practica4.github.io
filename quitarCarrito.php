<?php 
include_once "metodos.php";
if (!isset($_POST["id_producto"])) {
    exit("Sin id_producto");
}
quitarProductoDelCarrito($_POST["id_producto"]);
if (isset($_POST["redireccionar_carrito"])) {
    header("Location: miPedido.php");
} else {
    header("Location: ToyStore.php");
}
?>