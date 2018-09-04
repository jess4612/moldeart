<?php

/**
 * Esses dois comandos são mais relevantes no meu PC, dependendo da configuração do apache eles sao desnecessarios.
 * O que eles fazem é configurar o PHP pra mostrar erros (Por padrao, o apache/PHP de servidores/linux nao mostra
 * erros, o seu apache mostra, entao vc nao precisa desses comandos)
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);


/**
 * Aqui foi declarado o diretório raiz onde todas as páginas vão "rodar" encima, e foram definidas as continuaçao dos diretórios para as páginas a partir da url e do endereço interno
 */
define('RAIZ', dirname(__FILE__));
define('INDEX', "http://localhost/moldeart");

define('URL_VIEWS', INDEX . '/views');

define('URL_IMG', INDEX . '/views/_img');

define('PATH_VIEWS', RAIZ . '/views');

define('PATH_SECTIONS', PATH_VIEWS . '/_includes/sections');