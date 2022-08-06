<?php

namespace Alura\Cursos\Controller;

class EditarCurso implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        $titulo = 'Editar Curso';
        require __DIR__ . '/../../view/cursos/editar-curso.php';
    }
}