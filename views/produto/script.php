<?php
if (!defined('RAIZ')) exit();

//Declarar titulo e BG
$title = 'Produto - Molde Art';
$background = 'rgb(245,222,179)';

//includes
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/produto/view.php';
include RAIZ . '/views/_includes/footer.php';