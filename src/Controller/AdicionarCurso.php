<?php

namespace Alura\Cursos\Controller;

class AdicionarCurso implements InterfaceControladorRequisicao{

    public function processaRequisicao(): void
    {
        $titulo = 'Novo Curso';
        require __DIR__ . '/../../view/cursos/adicionar-cursos.php';
    }
}
