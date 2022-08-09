<?php

use Alura\Cursos\Controller\AdicionarCurso;
use Alura\Cursos\Controller\CadastrarUsuario;
use Alura\Cursos\Controller\Cadastro;
use Alura\Cursos\Controller\EditarCurso;
use Alura\Cursos\Controller\EditarCursoSalvar;
use Alura\Cursos\Controller\EsqueceuSenha;
use Alura\Cursos\Controller\ExcluirCurso;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Login;
use Alura\Cursos\Controller\Logout;
use Alura\Cursos\Controller\RealizarLogin;
use Alura\Cursos\Controller\redefinirSenha;
use Alura\Cursos\Controller\SalvarCurso;

$routes = [
    '/login' => Login::class,
    '' => Login::class,
    '/logout' => Logout::class,
    '/listar-cursos' => ListarCursos::class,
    '/adicionar-curso' => AdicionarCurso::class,
    '/salvar-curso' => SalvarCurso::class,
    '/excluir-curso' => ExcluirCurso::class,
    '/editar-curso-salvar' => EditarCursoSalvar::class,
    '/editar-curso' => EditarCurso::class,
    '/realizar-login' => RealizarLogin::class,
    '/cadastro' => Cadastro::class,
    '/cadastrar-usuario' => CadastrarUsuario::class,
    '/esqueceu-senha' => EsqueceuSenha::class,
    '/redefinir-senha' => redefinirSenha::class
    ];

return $routes;