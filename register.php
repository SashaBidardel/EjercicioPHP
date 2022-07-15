<?php
include ("conection.php");

if (isset($_POST["btn"])){
    if (strlen($_POST["nombre"])>=1 && strlen($_POST["password"])>=1&& strlen($_POST["correo"])>=1 ){
        $nombre=$_POST["nombre"];
        $password=$_POST["password"];
        $correo=$_POST["correo"];
        $consulta="INSERT INTO usuarios(userNames,password,correo) VALUES ('$nombre','$password','$correo')";
        $result=mysqli_query($conect,$consulta);
        if ($result){
            ?>
            <h3>Se ha inscrito correctamente</h3>
            <?php
        }
        else{
            ?>
            <h3>Ha habido un problema</h3>
            <?php
         }
    }
}
?>



