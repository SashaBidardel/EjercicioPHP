<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: https://*.gstatic.com 'unsafe-eval' https://*.googleapis.com; style-src 'self' 'unsafe-inline' https://*.gstatic.com  https://*.googleapis.com; media-src *; img-src 'self' data: content: https://*.gstatic.com  https://*.googleapis.com;">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="/estilos/map.css">
        <title>App Localización</title>
    </head>
   
       
<body>
    <form action="" method="$_POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" required>
        </p>
        <p>
            <label for="apellidos" >Apellidos</label>
            <input type="text" id="apellidos" required>
        </p>
       
        <p>Marque la casilla si acepta todas las condiciones:
            <label for="acept">Acepto</label>
            <input type="checkbox" id="acept" required>
        </p>
        <p>
          <input type="email" id="email" placeholder="Introduzca su correo">
          <!-- <input type="email" id="email2" placeholder="Repita su correo" > -->
        </p>
        <p>
            <label for="asunto">Asunto</label>
            <input type="text" id="asunto" name="asunto">
        </p>
        <p>
            <label for="mensaje">Mensaje</label>
            <input type="text" id="mensaje" name="mensaje">
        </p>
        <input type="submit" value="Enviar" id="boton">
    </form> 
   
    <div id="cntMapa" class="map"> </div>
    <!-- <script src="./validation.js"></script> -->
    <script src="index.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2spkHbD-wfnjw2cqvAaBo07Iq0dQ1e0&callback=initMap&v=weekly&channel=2" async></script>


   
</body>
</html>