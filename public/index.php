<?php

use Alura\Cursos\Controller\AdicionarCurso;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Login;
use Alura\Cursos\Controller\SalvarCurso;

require __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ . '/../config/routes.php';
$path = $_SERVER['PATH_INFO'];


if(!array_key_exists($path, $routes)){
    echo "ERRO 404";
    exit();
}
else {
    $classeControladora = $routes[$path];
    /** @var InterfaceControladorRequisicao $controlador */
    $controlador = new $classeControladora;
    $controlador->processaRequisicao();
}
