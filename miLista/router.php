<?php
    require_once 'templates/home.php';
    require_once 'templates/about.php';

    //sin esto no funciona el BASE de head se encarga de concatenar barras
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // leemos la accion que viene por parametro
    $action = 'home'; // acción por defecto

    if (!empty($_GET['action'])) { // si viene definida la reemplazamos
        $action = $_GET['action'];
    }


    // parsea la accion Ej: dev/juan --> ['dev', juan]
    $params = explode('/', $action);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home':
            showHome();
            break;
        case 'about':
            showAbout();
            break;
        default:
            echo('404 Page not found');
            break;
    }
