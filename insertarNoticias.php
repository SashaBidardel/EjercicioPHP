<?php
include ("conection.php");

if (isset($_POST["btnNoticias"])){
    if (strlen($_POST["titular"])>=1 && strlen($_POST["texto"])>=1){
        $titular=$_POST["titular"];
        $texto=$_POST["texto"];
        $imagen=$_POST["imagen"];
        // $imagen=$_POST["imagen"];
        $consulta="INSERT INTO noticias (titulo,texto,imagen) VALUES ('$titular','$texto','$imagen')";
        $result=mysqli_query($conect,$consulta);
        if ($result){
          header("Location: inicio.php");
        }
       
    }
}
?>