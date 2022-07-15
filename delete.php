<?php 
include "conection.php";
$id_noticia=$_GET['id'];
$sql="DELETE from noticias WHERE id=$id_noticia";
$query=mysqli_query($conect,$sql);
if ($query){
    header("Location: inicio.php");
  }
?>