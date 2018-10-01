<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
    exit();
}

//Atribuir valores especificos
$title = 'Fale Conosco - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/home/suporte/view.php';
include RAIZ . '/views/_includes/footer.php';
