<?php
use \Connection\Connection;

if (!defined('RAIZ')) {
    exit();
}

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX . '/home');
    exit();
}

$con = new Connection('MoldeArt');
$arts = $con->dbExec('SELECT * FROM E_Artefato LIMIT 5');

if (!empty($arts) and !isset($arts[0])) {
    $back = $arts;
    $arts = null;
    $arts = array(0 => $back);
    unset($back);
}

//Atribuir valores especificos
$title = 'Home - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include PATH_VIEWS . '/home/view.php';
include RAIZ . '/views/_includes/footer.php';



