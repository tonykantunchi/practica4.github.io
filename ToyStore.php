<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clic Toy</title>
    <link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>
    <?php include_once "superior.php" ?>
    <?php
        include_once "metodos.php";
        $productos = listadoJuguetes();
    ?>
    <div class="columns">
        <div class="colum">
            <h2> Donde la diversión nunca termina </h2>
        </div>
    </div>
    <?php foreach ($productos as $producto) { ?>
        <div class="columns">
            <div class="card">
                <h1><?php echo $producto->nombre ?></h1>
                <div class="card-content">
                    <?php echo '<img width="120" align="center" src="data:image/jpeg;base64'.base64_encode($producto->imagen).'""/>';?>
                    <h2>$<?php echo number_format($producto->precio, 2) ?></h2>
                    <?php if(!jugueteEnCarrito($producto->id)) {?>
                        <form action="quitarcarrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="carrito"></i>&nbsp;¡Ya casi es tuyo!</h2>
                            </span>
                            <button class="quitar">
                                <i class="fa fa-trash-o" style="font-size:28px;color:red"></i>&nbsp;Quitar
                            </button>
                        </form>
                    <?php } else {?>
                        <form action="alterarito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="agregar">
                                <i class="fa fa-cart-plus" style="font-size:28px;color:#22c65a"></i>&nbsp;Agregar
                            </button>
                        </form>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }?>
    <?php include_once "inferior.php" ?>
</body>
</html>

