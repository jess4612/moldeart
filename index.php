<?php
// Incluir configuracoes e arquivo para carregamento de classes
include 'conf.php';
include 'Autoload.php';

// Inicia a sessão aqui, é importante inicia-la aqui e nao em cada view, pois tornaria o codigo mais confuso e baguncado, iniciando aqui reduz-se as preocupacoes e podemos usar a variavel
//  $_SESSION
// com mais liberdade
session_start();

if (!empty($_SESSION['session_id'])) {
	if (session_id() != $_SESSION['session_id']) {
		session_destroy();
		session_start();
		$_SESSION['session_id'] = session_id();
	}
}

// Testa se o diretorio solicitado por $_GET['path'] NAO EXISTE
// Se a condicao for verdadeira ele mostra um erro de not found
// Se a condicao for falsa ele inclui o arquivo solicitado

// Importante: O nome enviado pela url amigavel é o nome da PASTA onde estao os
// arquivos da view ou de processamento solicitados, entao o codigo trata isso
// concatenando o conteudo da url com os nomes padrao dos arquivos.
if (!empty($_GET['path']) and 
	!file_exists(RAIZ . '/views/' . $_GET['path'] . '/script.php') and
	!file_exists(RAIZ . '/php/processos/' . $_GET['path'] . '/run.php')
) {
	echo 'Error 404 - Not found';
} else {
    // Se nada for informado na $_GET['path'], o path padrao é 'login' pois é a pagina inicial padrao
	$path = empty($_GET['path']) ? 'login' : $_GET['path'];

    // Cria array com dois indices, um é o arquivo de processamento(caso seja solicitado um processamento)
    // e o outro é o arquivo de view.
	$paths = array(
	    RAIZ . '/views/' . $path . '/script.php',
    	RAIZ . '/php/processos/' . $path . '/run.php'
    );

    // Inclui o arquivo solicitado
	include file_exists($paths[0]) ? $paths[0] : $paths[1];
}
