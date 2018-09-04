<?php
if (!defined('RAIZ')) exit();

//Atribuir valores especificos
$title = 'Home - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include PATH_VIEWS . '/home/view.php';
include RAIZ . '/views/_includes/footer.php';



