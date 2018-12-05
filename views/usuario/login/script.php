<?php
// Pro usuario nao fazer merda no seu sistema
if (!defined('RAIZ')) exit();

if (!empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
    exit();
}

$title = 'Login - Molde Art';
$background = 'url(' . URL_IMG . '/background/026.jpg)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_inicio.php';

// Incluir form de login
include RAIZ . '/views/usuario/login/view.php';

// Incluir footer default
include RAIZ . '/views/_includes/footer.php';
