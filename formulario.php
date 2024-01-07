<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buscador</h1>
<form action="mostrar.php" method="get">
    <input type="text" name="nombre" placeholder="Escriba su nombre aquí...">
    <input type="text" name="edad" placeholder="Escriba su edad aquí...">
    <button type="submit">Mostrar</button>
</form>

<pre>

<?php  

$nombre = isset($_GET['nombre']) ? $_GET['nombre']: 'sin';
$edad = isset($_GET['edad']) ? $_GET['edad'] : 'sin';
echo "Tu nombre: {$nombre} y edad: $edad";

?>  

</pre>
</body>
</html>