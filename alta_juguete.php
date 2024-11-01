
<?php include_once "superior.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo producto</title>
    <link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>
    <form action="guardar_juguete.php" method="post" enctype="multipart/form-data">
        <div class="registro">
            <h2>Registrar nuevo juguete</h2>
            <div class="field">
                <label>Nombre</label>
                <div class="control">
                    <input id="nombre" class="input" type="text" required placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="descripcion">Descripción</label>
                <div class="control">
                    <textarea name="descripcion" id="descripcion" class="textarea" cols="30" rows="5" 
                    placeholder="Descripción"></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio">Precio</label>
                <div class="control">
                    <input id="precio" name="precio" class="input" type="number" required placeholder="Precio" 
                    name="Precio">
                </div>
            </div>
            <div class="field">
                <label for="image">Imagen</label>
                <div class="control">
                    <input name="image" type="file"/>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input name="submit" type="submit" value="GUARDAR" id="enviar"/> <br><br>
                    <a href="juguetes.php" class="button">Volver</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>