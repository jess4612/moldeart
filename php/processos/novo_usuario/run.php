<?php
use Classes\Usuario;
//Validação da página de cadastro 
$msg = null;

//Ucfirst = deixa o primeiro caractere maiúsculo (elimina 1 validação);
$nome = ucfirst($_POST['nome']);
$sobrenome = ucfirst($_POST['sobrenome']);
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

if (!empty($nome) and !empty($sobrenome) and !empty($email) and !empty($senha) and !empty($confirmaSenha)) {

	//Nome: Não pode conter múmeros, nem cacteres especiais, não conter espaços, iniciar com uma letra maiuscula;
	if (is_numeric($nome)) {
		$msg = 'O campo "nome" não pode conter números!';
	} 
	//Sobrenome: Não pode conter múmeros, nem cacteres especiais, não conter espaços, iniciar com uma letra maiuscula; 
	elseif (is_numeric($sobrenome)) {
		$msg = 'O campo "sobrenome" não pode conter números!';
	}
	//E-mail: Não conter espaços, conter 1 caracter "@", conter ".com";
	elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL)) {
		$msg = 'E-mail inválido!';
	}
	//Senha: Ter pelo menos 1 caracter de número, ter pelo menos 8 caracteres no total, pelomenos 1 letra maúscula e 1 caractere especial;
	elseif (strlen($senha) < 8) {
		$msg = 'A senha precisa conter no mínimo 8 caracteres!';
	}
	//ConfirmaSenha: Conincidir com a primeira senha oferecida;
	elseif ($confirmaSenha != $senha) {
		$msg = 'As senhas não coincidem!';
	} else{
		$usuario = new Usuario($nome, $sobrenome, $email, md5($senha));
		$msg = $usuario->cadastrar();
	}

} else {
	$msg = 'Preencha todos os campos!';
}

$_SESSION['msg'] = $msg;
header('Location: ' . INDEX . '/usuario/cadastro');
