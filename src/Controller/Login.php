<?php


namespace Alura\Cursos\Controller;

class Login implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {

        require __DIR__ . '/../../public/login.php';

    }
}