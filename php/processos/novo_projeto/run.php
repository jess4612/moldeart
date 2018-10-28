<?php
use \Classes\Artefato;

/* Cadastra novo projeto no banco de dados */
$artefato = new Artefato();

$artefato->setNome($_POST['nome']);
$artefato->setCategoria($_POST['categoria']);
$artefato->setDescricao($_POST['descricao']);
$artefato->setTags($_POST['tags']);
$artefato->setImage($_FILES['img_proj']);
$artefato->setMateriais($_POST['materiais']);

$msg = $artefato->iniciarCadastro();

if ($msg == 'OK') {

    echo 'OK';

    $_SESSION['artefato'] = $artefato;
} else {
    echo $msg;
}
