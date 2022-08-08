<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;

class SalvarCurso implements InterfaceControladorRequisicao
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $curso = new Curso();

        if($descricao == null){
            echo "Título inválido";
            exit();
        }

        $curso->setDescricao($descricao);
        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        $_SESSION['tipo_mensagem'] = 'success';
        $_SESSION['mensagem'] = " Novo Curso adicionado!  $descricao ";

        header('location: /listar-cursos');

    }
}