<?php
// Correto, definição de segurança para o usuario que manjar nao ver seus codigos (é por causa desse comando que apareceu
// uma tela branca sem erros quando vc acessou o link)
if (!defined('RAIZ')) exit();

$title = 'Cadastro - Molde Art';
$background = 'url(' . URL_IMG . '/background/026.jpg)';

// Incluir <head></head> padrão
include RAIZ . '/views/_includes/header.php';
// Incluir navbar padrão
include RAIZ . '/views/_includes/cabecalho_inicio.php';
// Incluir view DESTA tela (Formulario para cadastro de usuario)
include RAIZ . '/views/usuario/cadastro/view.php';
// Incluir footer padrao
include RAIZ . '/views/_includes/footer.php';
