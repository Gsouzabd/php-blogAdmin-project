<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Infra\EntityManagerCreator;

class EsqueceuSenha implements InterfaceControladorRequisicao
{


    public function processaRequisicao(): void
    {
        require __DIR__ . '/../../public/esqueceu-senha.php';
    }
}