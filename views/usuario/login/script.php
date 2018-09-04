<?php
// Pro usuario nao fazer merda no seu sistema
if (!defined('RAIZ')) exit();

$title = 'Login - Molde Art';
$background = 'url(' . URL_IMG . '/background/026.jpg)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_inicio.php';

// Incluir form de login
include RAIZ . '/views/login/view.php';

// Incluir footer default
include RAIZ . '/views/_includes/footer.php';
