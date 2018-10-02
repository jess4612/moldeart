<?php
// Uso do namespace de conexao com o banco de dados, se tiver duvidas/interesse em entende isso, 
// vou te explicar separadamente junto com a classe Autoload.php (isso é um pouco mais complexo
// e seu entendimento nao é taaao necessario pra vc conseguir fazer seu projeto, mas é interessante)
use Connection\Connection;
use Classes\Usuario;

// Instanciado objeto de conexao com o banco de dados
$connection = new Connection('MoldeArt');

// Inicio da validacao, testa se email e senha foram informados
if (isset($_POST['email']) and isset($_POST['senha'])) {

	// usa email e criptografa a senha, vc que fez isso
	$emailLog = $_POST['email'];
	$senhaLog = md5($_POST['senha']);
	$userData = null;

	/**
	 * Bloco try{}catch(){}
	 * 
	 * Usado para tratamento de erros em PHP, ele tenta fazer o que esta escrito
	 * dentro de try {} mas se der algum erro ele cancela td e pula pro bloco
	 * catch () {}, se tiver duvidas me fala que eu esclareco, isso me bugou no comeco
	 * mas dps fica bem simples.
	 */
	try {

		// Sintaxe da biblioteca de conexao, apenas sintaxe
		// É feita a definicao da query e em seguida a configuracao das variaveis
		// Vou te explicar separadamente na escola pra vc conseguir usar com maior liberdade, essa
		// parte é simples
		$query = 'SELECT * FROM E_Usuario WHERE USU_EMAIL = @emailVAR AND USU_SENHA = @senhaVAR';
		$vars = array(
			'@emailVAR' => $emailLog,
			'@senhaVAR' => $senhaLog
		);

		// Execucao pela minha lib de conexao, só sintaxe
		$userData = $connection->dbExec($query, $vars);
	} catch (Exception $e) {
		// Em caso de erro, o OBJETO com as informações do erro é intanciado em $e
		// Depois te explico o porque eu trato o OBJETO $e como uma string
		echo $e;
	}

	// Trata erros e redireciona, atencao no uso de constantes e na url amigavel
	if (empty($userData)) {
		$_SESSION['error'] = 'Usuário ou senha incorretos.';
		header('Location: ' . INDEX);
	} else {
		$_SESSION['userdata'] = new Usuario($userData['USU_NOME'], $userData['USU_SOBRENOME'], $userData['USU_EMAIL']);
		$_SESSION['userdata']->setCod($userData['USU_COD']);
		$_SESSION['userdata']->setImage($userData['USU_IMAGEM']);
		header('Location: ' . INDEX . '/home');
	}
} else {
	// Redireciona em caso de ausencia de informacoes
	// Atencao ao uso de constante e url amigavel
	header('Location: ' . INDEX);
}
