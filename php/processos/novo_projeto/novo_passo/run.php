<?php

$_SESSION['artefato']->novoPasso(array(
    'descricao' => $_POST['descPasso'],
    'image' => $_FILES['img_passo']
));

echo $_SESSION['artefato']->forms();
