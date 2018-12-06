<?php
use \Connection\Connection;
if (!defined('RAIZ')) {
    exit();
}
if (empty($_GET['cod']) or !is_numeric($_GET['cod'])) {
    header('Location: ' . INDEX . '/home');
    exit();
}

$con = new Connection('MoldeArt');
$query = 'SELECT E_Artefato.*, E_Usuario.USU_NOME FROM E_Artefato, E_Usuario WHERE ART_COD = @codVAR AND E_Artefato.USU_COD = E_Usuario.USU_COD';
$art = $con->dbExec($query, ['@codVAR' => $_GET['cod']]);


//Atribuir valores especificos
$title = 'Projeto - Molde Art';
$background = 'rgb(245,222,179)';

// Incluir defaults
include RAIZ . '/views/_includes/header.php';
include RAIZ . '/views/_includes/cabecalho_folha.php';
include RAIZ . '/views/projeto/view.php';
include RAIZ . '/views/_includes/footer.php';
