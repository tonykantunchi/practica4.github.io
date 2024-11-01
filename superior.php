<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" type="text/css" href="Estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Clic Toy</title>
</head>
<body>
    <nav class="navbar is-warning" role="navigation" aria-label="main navigation"></nav>
    <div class="navbar-brand" align="center">
        <a class="navbar-item">
            <img src="/Ecommerce/ToyStore/img/cap.jpg" style="max-height: 100px" alt="" class="logo">
        </a>
    </div>
    <br>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a href="juguetes.php">Juguetes</a>
            <a href="ToyStore.php">Volver a ToyStore</a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="mipedido.php" class="button is-success">
                    <?php
                        include_once "metodos.php";
                        $conteo=count(obtenerIdsDeProductosEnCarrito());
                        if ($conteo >0) {
                            printf("(%d)", $conteo);
                        }
                    ?> <i class="fa fa-shopping-cart" style="font-size:36px"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="section"></section>
</body>
</html>