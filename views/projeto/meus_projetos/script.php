<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX . '/home');
    exit();
}

/**
 * Executar select no banco de dados para buscar os projetos cadastrados referentes ao usuário logado
 */
$projetos = $_SESSION['userdata']->projects();

//Atribuir valores especificos
$title = 'Meus projetos - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/projeto/meus_projetos/view.php';
include RAIZ . '/views/_includes/footer.php';
