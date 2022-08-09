<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class redefinirSenha implements InterfaceControladorRequisicao
{
    private $entityManager;
    private $repositorioUsuario;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioUsuario = $this->entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email_cad', FILTER_VALIDATE_EMAIL);
        $usuario = $this->repositorioUsuario->findOneBy(['email' => $email]);

        if(is_null($usuario) ){
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = 'E-mail inexistente';
            header('location: /esqueceu-senha');
            return;
        }

        $_SESSION['tipo_mensagem'] = 'success';
        $_SESSION['mensagem'] = 'Um link foi enviado para seu e-mail';
        header('location: /login');

    }
}