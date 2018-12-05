<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
}


//Atribuir valores especificos
$title = 'Empresarial - Molde Art';
$background = 'rgb(250,227,184)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/home/empresarial/view.php';
include RAIZ . '/views/_includes/footer.php';
