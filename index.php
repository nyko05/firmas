<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo canvas mano alzada</title>
</head>
<body>

<!-- creamos el camvas -->
<canvas id='canvas' width="200" height="200" style='border: 1px solid #CCC;'>
    <p>Tu navegador no soporta canvas</p>
</canvas>

<!-- creamos el form para el envio -->
<form id='formCanvas' method='post' action='guardarfirma.php' ENCTYPE='multipart/form-data'>
    <button type='button' onclick='LimpiarTrazado()'>Borrar</button>
    <button type='button' onclick='GuardarTrazado()'>Guardar</button>
    <input type='hidden' name='imagen' id='imagen' />
</form>
<script src="js/app.js"></script>
</body>
</html>