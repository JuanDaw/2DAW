<?php

const FPP = 3;

function cookies()
{
    if (isset($_COOKIE['borrar'])) {
        setcookie('borrar', '', 1); ?>
        <h3>La fila se ha borrado correctamente.</h3><?php
    }
}

function banner()
{
    if (!isset($_COOKIE['acepta_cookies'])): ?>
        <h2>
            Este sitio usa cookies.
            <a href="cookies.php">Aceptar</a>
        </h2><?php
    endif;
}

function conectar()
{
    $pdo = new PDO('pgsql:host=localhost;dbname=citas', 'juan', 'piscina');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function volver()
{
    header('Location: /index.php');
}

function error($mensaje)
{ ?>
    <h3><?= $mensaje ?></h3><?php
    return true;
}

function mostrar_errores($error)
{
    foreach ($error as $k => $v) {
        foreach ($v as $mensaje) {
            echo "<h3>$mensaje</h3>";
        }
    }
}

function cancelar()
{ ?>
    <a href="index.php">Volver</a><?php
}

function recoger($tipo, $nombre)
{
    return filter_input($tipo, $nombre, FILTER_CALLBACK, [
        'options' => 'trim'
    ]);
}

function recoger_get($nombre)
{
    return recoger(INPUT_GET, $nombre);
}

function recoger_post($nombre)
{
    return recoger(INPUT_POST, $nombre);
}

function selected($a, $b)
{
    return ($a == $b) ? 'selected' : '';
}

function hh($s)
{
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE);
}

function logueado()
{
    return $_SESSION['login'] ?? false;
}

function encabezado()
{
    if ($logueado = logueado()): ?>
        <form action="/comunes/logout.php" method="post" style="float:right">
            <?= hh($logueado['nombre']) ?>
            <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
        </form><?php
    else: ?>
        <form action="/comunes/login.php" style="float:right">
            <button type="submit">Login</button>
        </form><?php
    endif;
}

function flash()
{
    if (isset($_SESSION['flash'])) {
        echo "<h3>{$_SESSION['flash']}</h3>";
        unset($_SESSION['flash']);
    }
}

function head()
{
    banner();
    encabezado();
    flash();
}

function comprobar_logueado()
{
    if (!logueado()) {
        $_SESSION['flash'] = 'Debe estar logueado.';
        header('Location: /comunes/login.php');
    }
}

function comprobar_admin()
{
    comprobar_logueado();

    if (logueado()['nombre'] != 'admin') {
        $_SESSION['flash'] = 'Debe ser administrador.';
        volver();
    }
}

function paginador($pag, $npags, $params)
{ ?>
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if ($pag > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?= ($pag - 1) . "$params" ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php for ($i = 1; $i <= $npags; $i++): ?>
                        <?php if ($pag == $i): ?>
                            <li class="page-item active">
                                <span class="page-link">
                                    <?= $i ?>
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a class="page-link" href="?pag=<?= "$i$params" ?>">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endfor ?>
                    <?php if ($pag < $npags): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pag=<?= ($pag + 1) . "$params" ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </nav>
        </div>
    </div><?php
}
