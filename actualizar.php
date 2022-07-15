<?php 
include "conection.php";
$id_noticia=$_GET['id'];
$sql="SELECT * from noticias WHERE id=$id_noticia";
$query=mysqli_query($conect,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <form action="updateNoticias.php" method="POST">
        <label for="titulo">Titular</label>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <input type="text" name="titulo" value="<?= $row["titulo"] ?>">
        <label for="titular">Contenido</label>
        <input type="text" name="texto" value="<?= $row["texto"] ?>">
        <label for="titular">Imagen</label>
        <input type="text" name="imagen" value="<?= $row["imagen"] ?>">
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
