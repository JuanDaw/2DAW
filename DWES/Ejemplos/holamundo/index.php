<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>

<body>
    <!-- <?= "Hola mundo" ?>
    <?php echo "Hola mundo" ?>
    <?= php_sapi_name() ?> -->
    <form action="saluda.php" method="get">
        <label for="nom">Escribe tu nombre:</label>
        <input type="text" name="nombre" id="nom">
        <button type="submit">Saludar</button>
    </form>
</body>

</html>