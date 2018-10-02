<?php
/**
 * Altera dados da conta do usuário conectado
 */
use \Classes\Usuario;

// Checar Login
if (empty($_SESSION['userdata'])) {
    header('Location: ' . INDEX);
    exit();
}

$user = $_SESSION['userdata'];
$msg = null;

// Alterar dados comuns
if ($_POST['nome'] != $user->getNome() or
    $_POST['sobrenome'] != $user->getSobrenome() or
    $_POST['email'] != $user->getEmail()
) {
    //Nome: Não pode conter múmeros, nem cacteres especiais, não conter espaços, iniciar com uma letra maiuscula;
    if (is_numeric($_POST['nome'])) {
        $msg = 'O campo "nome" não pode conter números!';
    } 
    //Sobrenome: Não pode conter múmeros, nem cacteres especiais, não conter espaços, iniciar com uma letra maiuscula; 
    elseif (is_numeric($_POST['sobrenome'])) {
        $msg = 'O campo "sobrenome" não pode conter números!';
    }
    //E-mail: Não conter espaços, conter 1 caracter "@", conter ".com";
    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $msg = 'E-mail inválido!';
    }

    $user->setNome($_POST['nome']);
    $user->setSobrenome($_POST['sobrenome']);
    $user->setEmail($_POST['email']);
}

// Alterar senha
if (!empty($_POST['senha']) and 
    $_POST['senha'] == $_POST['confirmaSenha'] and
    md5($_POST['senha']) != $user->getSenha()
) {
    $user->setSenha(md5($_POST['senha']));
}

// Alterar imagem de perfil
if (!empty($_FILES['img'])) {
    ## validar tipo de imagem
    $type = explode('/', $_FILES['img']['type']);
    $type = end($type);

    if(!in_array($type, array('png', 'jpg', 'jpeg'))) {
        // var_dump($file);
        $msg = 'Formato de imagem invalido ou imagem não enviada.';
    }

    if (!$msg) {
        // Mover imagem
        $imgName = time() . '.' . $type;
        $uploadPath = PATH_VIEWS . '/_upload/' . $imgName;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadPath);
        chmod($uploadPath, 775);

        // Apagar imagem antiga
        if ($user->getImage() != 'default-user-img.png' and
            file_exists($user->getImage())
        ) {
            unlink($user->getImage());
        }

        // Atualizar imagem no banco de dados
        $user->setImage($imgName);
    }
}


if (empty($msg)) {
    $user->update();
}


$_SESSION['msg'] = $msg ? $msg : 'Alterações realizadas com sucesso.';
header('Location: ' . INDEX . '/home/perfil');
