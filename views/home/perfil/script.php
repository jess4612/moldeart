<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
    exit();
}

//declarar title e BG
$title = 'Perfil - Molde Art';
$background = 'rgb(245,222,179)';

//incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/home/perfil/view.php';
include RAIZ . '/views/_includes/footer.php';
