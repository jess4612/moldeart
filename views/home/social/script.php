<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
}

//Atribuir valores especificos
$title = 'O que é MEI? - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/home/social/view.php';
include RAIZ . '/views/_includes/footer.php';
