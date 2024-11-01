<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Estilo.css">
    <title>ToyStore</title>
</head>
<body>

</body>
</html>
<?php include_once "superior.php" ?>
<?php 
include_once "metodos.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
    <section class="principal">
        <div class="container">
            <div class="container">
                <h1>
                    Aún no tienes juguetes en tu carrito
                </h1>
                <h2>
                    Da un paseo por nuestra tienda para encontrar tu juguete favorito
                </h2>
                <a href="ToyStore.php" class="button is-warning">Regresar a compras</a>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2>JUGUETES GUARDADOS EN CARRITO</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>     </th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
                        <tr>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->descripcion ?></td>
                            <td><?php echo number_format($producto->precio, 2) ?></td>
                            <td><?php echo '<img width="100" src="data:image/jpeg;base64,' .base64_encode($producto->imagen). '"/>'; ?></td>
                            <td>
                                <form action="quitarCarrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            <strong>
                                <?php echo number_format($total, 2) ?>
                            </strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <br>
            <br>
            <div class="continuar">
                <a href="miPago.php" class="btn btn-primary"><i class="fa fa-check-circle"></i>&nbsp;Ir a pagar</a>
            </div>
            <br>
            <br>
        </div>
    </div>
<?php } ?>
<?php include_once "inferior.php" ?>