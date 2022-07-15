<?php 
    require './conection.php';
    session_start();
    $nombre=$_POST["nombre"];
    $password=$_POST["password"];
    $query="SELECT COUNT(*) as contar FROM usuarios where userNames='$nombre' and password='$password'";
    $consulta=mysqli_query($conect,$query);
    $array=mysqli_fetch_array($consulta);
    if ($array['contar']>0){
        $_SESSION['username']= $nombre;
        header("location:inicio.php ");
    }
?>
