<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
    exit();
}
if (!$_SESSION['userdata']->isAdmin()) {
    header('Location: ' . INDEX . '/home');
    exit();
}

//Atribuir valores especificos
$title = 'Area restrita | MoldeArt';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/home/social/restrita/view.php';
include RAIZ . '/views/_includes/footer.php';
