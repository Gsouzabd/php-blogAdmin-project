<?php

namespace Alura\Cursos\Controller;

class Cadastro implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        require __DIR__ . '/../../public/cadastro.html';
    }
}