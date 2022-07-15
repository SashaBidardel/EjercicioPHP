<?php 
include "conection.php";
$id_noticia=$_POST['id'];
$titulo_noticia=$_POST['titulo'];
$texto_noticia=$_POST['texto'];
$imagen_noticia=$_POST['imagen'];
$sql="UPDATE noticias SET  titulo='$titulo_noticia',texto='$texto_noticia',imagen='$imagen_noticia' WHERE id=$id_noticia";
$query=mysqli_query($conect,$sql);
if ($query){
    header("Location: inicio.php");
  }
?>
