<?php
if (!defined('RAIZ')) exit();

//Atribuir valores especificos
$title = 'Meus projetos - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/projeto/meus_projetos/view.php';
include RAIZ . '/views/_includes/footer.php';