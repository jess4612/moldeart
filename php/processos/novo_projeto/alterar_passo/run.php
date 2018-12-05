<?php

if (isset($_POST['keyStep'])) {
    $key = $_POST['keyStep'];
    $desc = $_POST['descPasso'];
    $img = null;

    if (isset($_FILES['img_passo']) and
        !empty($_FILES['img_passo']['name']) and
        !empty($_FILES['img_passo']['type']) and
        !empty($_FILES['img_passo']['tmp_name'])
    ) {
        $img = $_FILES['img_passo'];
    }

    $_SESSION['artefato']->editStep($key, $desc, $img);
} else {
    echo '<span class="red-text">Desculpe, um erro ocorreu</span>';
}

echo $_SESSION['artefato']->forms();
