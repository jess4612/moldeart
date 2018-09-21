<?php
namespace Classes;
use Connection\Connection;

//Criação da classe que gera objetos do tipo usuario
class Usuario
{
	private $nome;
	private $sobrenome;
	private $email;
	private $senha;

	//Criando função, conjunto de comandos que podem ser chamados durante o código
	function __construct(string $nome, string $sobrenome, string $email, string $senha = '')
	{
		
		//atribuindo o valor das variaveis já existentes aos atributos do objeto.
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
		$this->senha = $senha;
	}


	public function cadastrar()
	{
		//conectando com o banco de dados
		try {
			$con = new Connection('moldearts');

			$query = 'SELECT EMAIL FROM cadastrousuario WHERE EMAIL = @emailVAR';
			$vars = array('@emailVAR' => $this->email);

			$emailJaCadastrado = $con->dbExec($query, $vars);
			if ($emailJaCadastrado) {
				return 'Este email já está em uso, tente novamente.';
			}

			
			$query = 'insert into cadastrousuario(NOME, SOBRENOME, EMAIL, SENHA) ';
			$query .= 'VALUES (@nomeVAR, @sobrenomeVAR, @emailVAR, @senhaVAR)';

			$vars = array(
				'@nomeVAR' => $this->nome,
				'@sobrenomeVAR' => $this->sobrenome,
				'@emailVAR' => $this->email,
				'@senhaVAR' => $this->senha
			);
			$con->dbExec($query,$vars);
			return 'Obrigado por se cadastrar!';
		} catch (Exception $e) {
			echo $e;
			return 'Erro interno. Contate o suporte.';
		}
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function getEmail()
	{
		return $this->email;
	}

}
