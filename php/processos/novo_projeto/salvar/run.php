<?php

if ($_SESSION['artefato']->save()) {
    $_SESSION['msg'] = 'Novo projeto cadastrado com sucesso.';
} else {
    $_SESSION['msg'] = 'Houve um erro interno, desculpe-nos.';
}
echo INDEX . '/home';
