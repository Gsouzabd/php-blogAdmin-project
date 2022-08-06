<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class CadastrarUsuario implements InterfaceControladorRequisicao
{


    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();

    }

    public function processaRequisicao(): void
    {
        $usuario = new Usuario();

        $email = filter_input(INPUT_POST, 'email_cad', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha_cad', FILTER_SANITIZE_STRING);
        $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

        if (is_null($email) || $email === false || is_null($senha)){
            echo "E-mail ou senha incorreto!";
        }

        $usuario->setEmail($email);
        $usuario->setSenha($hashed_senha);
        $this->entityManager->persist($usuario);
        $this->entityManager->flush($usuario);

        session_start();
        $_SESSION['logado'] = true;


        header('location: /listar-cursos');
    }
}