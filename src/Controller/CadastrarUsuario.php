<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;

class CadastrarUsuario implements InterfaceControladorRequisicao
{


    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    private $repositorioUsuario;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioUsuario = $this->entityManager->getRepository(Usuario::class);

    }

    public function processaRequisicao(): void
    {
        $usuario = new Usuario();

        $email = filter_input(INPUT_POST, 'email_cad', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha_cad', FILTER_SANITIZE_STRING);
        $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);


        $check_email = $this->repositorioUsuario->findOneBy(['email' => $email]);


        if (!is_null($check_email)){
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = 'E-mail já existente';
            header('location: /cadastro');
            return;
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