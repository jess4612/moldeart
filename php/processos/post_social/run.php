<?php
use \Classes\Postagem;

if (!empty($_POST) and !empty($_FILES)) {
    if (!empty($_SESSION['userdata'])) {
        $post = new Postagem(
            $_POST['titulo'], 
            str_replace(PHP_EOL, '<br>', $_POST['texto']),
            $_FILES,
            $_SESSION['userdata']->getCod()
        );

        if ($post->moveImgs()) {
            $post->cadastrar();
        }

        $_SESSION['msg'] = $post->getMessage();
        header('Location: ' . INDEX . '/home/social/restrita');
    } else {
        header('Location: ' . INDEX);
        exit();
    }
} else {
    $_SESSION['msg'] = 'Um erro ocorreu ou os dados não foram enviados corretamente.';
    header('Location: ' . INDEX . '/home/social/restrita');
}
