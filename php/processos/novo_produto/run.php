<?php
use \Classes\Produto;

if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX . '/home');
    exit();
} else {
    $produto = new Produto();

    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->setTags($_POST['tags']);
    if (!empty($_POST['projeto'])) {
        $produto->setProjeto($_POST['projeto']);
    }
    $produto->setImg($_FILES['img_proj']);

    $produto->cadastrar();
}
$_SESSION['msg'] = 'Novo produto cadastrado.';
header('Location: ' . INDEX . '/home');
