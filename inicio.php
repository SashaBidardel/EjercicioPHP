<?php 
session_start();
$titulo="Ejercicio web noticias";
if (isset($_SESSION['username'])){
    $nombre= $_SESSION['username'];}
    else{
        $nombre="Anónimo";
    }
include "conection.php";
$sql="SELECT * from noticias";
$query=mysqli_query($conect,$sql);
?>
<?php  include './layouts/head.php'?>
<body>
   <div>
        <div class="block">
            <nav class="languages">
                <a href="" id="spanish">Español</a>
                <a href="" id="english">Inglés</a> 
                <a href="datosNoticias.php" style="margin-right: 2%;" >Administrar noticias</a>
                <?php if (!isset($_SESSION['username'])){?>
                <a href="formularioLoguear.php"  >Login</a>
                <a href="datosFormulario.php" style="margin-left: 2%;">Registrarse</a>
                <?php }else{?>
                   <a href="cerrarSesion.php" >cerrar sesión</a> 
                   <?php }?>
            </nav>
            <?php ?>
            <h4>Hola<?=" ".$nombre; ?></h4>     
    <?php 
     include './layouts/header.php'
    ?>       
    </div>        
        <?php 
        include './layouts/nav.php' ?>
        
        <div>
        <?php 
        include './layouts/navDesplegable.php' ?>
        </div>  
    <main class="block2">
       
        <section class="block">
        <?php 
               
               while($row=mysqli_fetch_array($query)){ ?>
               <article class="block ">              
               <strong><?=$row["titulo"]  ?></strong>
               <div class="cabecera">
                    <img src="<?= $row["imagen"] ?>"class="sizePhoto logo" >
                   <p class="contenido"><?= $row["texto"] ?></p>
                </div>
           </article>
           <?php } ?>

         <?php 
             include './layouts/paginador.php' ?>   
            
        </section>
        <aside class="block">
            <article class="block">
                <header>
                    <time >Publicado el 08/03/2013</time>
                    <h1>Contenido relacionado 1</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, explicabo!</p>
                </header>
            </article>
            <article class="block">
                <header>
                    <time >Publicado el 08/03/2013</time>
                    <h1>Contenido relacionado 2</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, explicabo!</p>
                </header>
            </article>
        </aside>
    </main>
    <?php 
    include './layouts/footer.php' ?>   
</body>
</html>