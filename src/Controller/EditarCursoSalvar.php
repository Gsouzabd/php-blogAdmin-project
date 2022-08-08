<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class EditarCursoSalvar implements InterfaceControladorRequisicao
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }


    public function processaRequisicao(): void
    {
        var_dump($_POST);

        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        var_dump($id);
        $curso = $this->entityManager->find(Curso::class, $id);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $curso->setId($id);
        $curso->setDescricao($descricao);
        $this->entityManager->merge($curso);
        $this->entityManager->flush($curso);
        $_SESSION['tipo_mensagem'] = 'success';
        $_SESSION['mensagem'] = "  Curso editado com sucesso!  $descricao ";
        header("location: /listar-cursos");


    }
}