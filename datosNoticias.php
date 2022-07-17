<?php 
session_start();
$titulo="Administración";
$nombre="Sasha";
include "conection.php";
$sql="SELECT * from noticias";
$query=mysqli_query($conect,$sql);
include ("insertarNoticias.php");
include './layouts/head.php';
    ?>
<body>
    <form action="" method="post" class="formulario" enctype= multipart/form-data>
        <label for="1">Introduzca el titular</label>
        <input type="text" id="1" name="titular">
        <label for="2">Introduzca su contenido</label>
        <input type="text" id="2" name="texto">
        <label for="3">Introduzca la imagen</label>
        <input type="file" id="3" name="imagen">
        <input type="submit" name="btnNoticias" id="btn" value="Enviar">
    </form>
    <section class="block" style="width: 30%;margin: auto;">
        <?php 
               
               while($row=mysqli_fetch_array($query)){ ?>
               <article class="block " >              
               <strong><?=$row["titulo"]  ?></strong>
               <div class="cabecera">
                    <img src="<?= $row["imagen"] ?>"class="sizePhoto logo" >
                   <p class="contenido"><?= $row["texto"] ?></p>
                </div>
                
                <a href="actualizar.php?id=<?php echo $row['id']?>" class="botonActualizar">Actualizar</a>
                <a href="delete.php?id=<?php echo $row['id']?>" class="botonEliminar"  >Eliminar</a>
           </article>
           <?php } ?>
</body>
</html>