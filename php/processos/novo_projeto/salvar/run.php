<?php

if (isset($_POST['descPasso']) and isset($_FILES['img_passo'])) {
    $_SESSION['artefato']->novoPasso(array(
        'descricao' => $_POST['descPasso'],
        'image' => $_FILES['img_passo']
    ));
}

if ($_SESSION['artefato']->save()) {
    $_SESSION['msg'] = 'Novo projeto cadastrado com sucesso.';
} else {
    $_SESSION['msg'] = 'Houve um erro interno, desculpe-nos.';
}
echo INDEX . '/home';
