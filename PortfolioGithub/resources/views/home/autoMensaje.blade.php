<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Hola!</h1>
        <p>Recibiste un mail de {{ $contacto['nombre-completo'] }},y este es su correo {{ $contacto['email'] }} .</p>
        <p> Su mensaje decia : 
         {{ $contacto['contenido-email'] }}</p>
    </body>
</html>