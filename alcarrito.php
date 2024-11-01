
<? php
include_once "metodos.php";
if (!isset($_POST["id_producto"])){
    exit("No hay producto");
}
agregaJugueteCarrito($_POST["id_producto"]);
header("Location: ToyStore.php");
?>
