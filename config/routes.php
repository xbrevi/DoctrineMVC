<?php

use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\FormularioEdicao;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\Logout;
use Alura\Cursos\Controller\RealizarLogin;


$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/realiza-logout' => Logout::class,
];

return $rotas;

