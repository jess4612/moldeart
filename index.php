<?php
// Incluir configurações e arquivo 
include 'conf.php';
include 'Autoload.php';

// Iniciar sessão
session_start();

// Testa se o diretorio solicitado por $_GET['path'] NAO EXISTE, se a condicao for verdadeira ele mostra um erro de not found,se a condicao for falsa ele inclui o arquivo solicitado
if (!empty($_GET['path']) and 
	!file_exists(RAIZ . '/views/' . $_GET['path'] . '/script.php') and
	!file_exists(RAIZ . '/php/processos/' . $_GET['path'] . '/run.php')
) {
	echo 'Error 404 - Not found';
} else {
    // Se nada for informado na $_GET['path'], o path padrao é 'login'
	$path = empty($_GET['path']) ? 'usuario/login' : $_GET['path'];

    // Cria array com dois indices, um é o arquivo de processamento e o outro é o arquivo de view.
	$paths = array(
	    RAIZ . '/views/' . $path . '/script.php',
    	RAIZ . '/php/processos/' . $path . '/run.php'
    );

    // Inclui o arquivo solicitado
	include file_exists($paths[0]) ? $paths[0] : $paths[1];
}
