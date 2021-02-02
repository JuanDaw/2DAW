<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión académica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php
    require '../comunes/auxiliar.php';

    $pdo = conectar();
    $pag = recoger_get('pag') ?? 1;
    
    $limit = FPP;
    $offset = FPP * ($pag - 1);

    $sent = $pdo->query('SELECT COUNT(*) FROM alumnos');
    $nfilas = $sent->fetchColumn();
    $npags = ceil($nfilas / FPP);
    $sent = $pdo->query("SELECT *
                            FROM alumnos
                        ORDER BY nombre
                            LIMIT $limit
                            OFFSET $offset");
    $alumnos = $sent->fetchAll();
    ?>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>TELEFONO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
                <tr>
                    <td> <?= $alumno['nombre'] ?></td>
                    <td> <?= $alumno['telefono'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php paginador($pag, $npags) ?>
</body>
</html>  