<?php
if (!defined('RAIZ')) exit();

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX . '/home');
    exit();
}

//Atribuir valores especificos
$title = 'Home - Molde Art';
$background = 'rgb(245,222,179)';

$_SESSION['msg'] = 'Mensagem de teste';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include PATH_VIEWS . '/home/view.php';
include RAIZ . '/views/_includes/footer.php';



