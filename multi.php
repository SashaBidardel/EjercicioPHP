
<?php  
      $titulo="Tabla de multiplicar";
      $nombre="Sasha,a aprender mates!!!";
      include './layouts/head.php';?>
      <div class="boton">
            <a href="inicio.php" >Inicio</a>
      </div>
     <div class="block">
        <?php include './layouts/header.php';?>
     </div>
<div class="block">
<?php     
    
     for($i=1; $i<=9;$i++) {
     $multiplicando= $i;
     $multiplicador;
     echo '<div class="tabla">';
     echo "<table>";
     echo "<tr>";
     echo ' <th colspan="5">Tabla del'." ".$i.'</th>' ;                 
     echo  "</tr>" ; 
     echo "</table>";     
     for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
         echo "<table>";
         echo '<tr>';
         echo "<td>"."$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador."<br>";
         echo "</td>"; 
         echo "</tr>";
         echo "</table>";
     }
     echo "</div>";
 
     
 }?>
 </div>
 <?php
 include './layouts/footer.php';
 ?>

</body>
</html>
