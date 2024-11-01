<?php
if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false)
    {
        $image = $_FILES["image"]["tmp_name"];
        $imgContent = addslashes(file_get_contents($image));
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'tienda';

        $db = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName );
        if($db->connect_error)
        {
            die("Fallo la conexión" . $db->connect_error);
        }

        $dataTime = date("Y-m-d H:i:s");
        
        $nom = $_POST["nombre"];
        $des = $_POST["descripcion"];
        $pre = $_POST["precio"];

        $insert = $db-> query("INSERT into productos (nombre, descripcion, precio, imagen) 
                             VALUES ('$nom', '$des', '$pre', '$imgContent')");
        
        if($insert)
        {
            echo "Ok";
        }
        else
        {
            echo " ";
        }
    }
    else
    {
        echo "Selecciona una imagen";
    }
}
header("Location: juguetes.php");
?>