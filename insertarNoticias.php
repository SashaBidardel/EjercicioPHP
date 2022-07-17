<?php
include ("conection.php");

if (isset($_POST["btnNoticias"])){
    if (strlen($_POST["titular"])>=1 && strlen($_POST["texto"])>=1){
        $titular=$_POST["titular"];
        $texto=$_POST["texto"];
        $nombreImagen=$_FILES['imagen']['name'];
        $temporal=$_FILES['imagen']['tmp_name'];
        $carpeta="./assets";
        $ruta=$carpeta."/".$nombreImagen;
        move_uploaded_file($temporal,$carpeta."/".$nombreImagen);
        $consulta="INSERT INTO noticias (titulo,texto,imagen,fecha) VALUES ('$titular','$texto','$ruta', CURRENT_TIMESTAMP)";
        $result=mysqli_query($conect,$consulta);
        if ($result){
          header("Location: inicio.php");
        }
       
    }
}
?>