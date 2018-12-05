<?php
namespace Classes;
use Connection\Connection;

//Criação da classe que gera objetos do tipo usuario
class Usuario
{
	private $cod;
	private $nome;
	private $sobrenome;
	private $email;
	private $senha;
	private $image;
	private $admin;

	//Criando função, conjunto de comandos que podem ser chamados durante o código
	function __construct(string $nome = '', string $sobrenome = '', string $email = '', string $senha = '', bool $admin = false)
	{
		//atribuindo o valor das variaveis já existentes aos atributos do objeto.
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
		$this->admin = $admin;
		$this->senha = $senha;
	}

	public function cadastrar()
	{
		//conectando com o banco de dados
		try {
			$con = new Connection('MoldeArt');

			$query = 'SELECT USU_EMAIL FROM E_Usuario WHERE USU_EMAIL = @emailVAR';
			$vars = array('@emailVAR' => $this->email);

			$emailJaCadastrado = $con->dbExec($query, $vars);
			if ($emailJaCadastrado) {
				return 'Este email já está em uso, tente novamente.';
			}

			
			$query = 'insert into E_Usuario(USU_NOME, USU_SOBRENOME, USU_EMAIL, USU_SENHA) ';
			$query .= 'VALUES (@nomeVAR, @sobrenomeVAR, @emailVAR, @senhaVAR)';

			$vars = array(
				'@nomeVAR' => $this->nome,
				'@sobrenomeVAR' => $this->sobrenome,
				'@emailVAR' => $this->email,
				'@senhaVAR' => $this->senha
			);
			$con->dbExec($query,$vars);
			return "Obrigado por se cadastrar!";
		} catch (Exception $e) {
			echo $e;
			return 'Erro interno. Contate o suporte.';
		}
	}

	public function update()
	{
		// Definir o que será atualizado
		$toUpdate = array();
		if (!empty($this->nome)) {
			$toUpdate['USU_NOME'] = ['@nomeVAR', $this->nome];
		}
		if (!empty($this->sobrenome)) {
			$toUpdate['USU_SOBRENOME'] = ['@sobrenomeVAR', $this->sobrenome];
		}
		if (!empty($this->email)) {
			$toUpdate['USU_EMAIL'] = ['@emailVAR', $this->email];
		}
		if (!empty($this->senha)) {
			$toUpdate['USU_SENHA'] = ['@senhaVAR', $this->senha];
		}
		if (!empty($this->image)) {
			$toUpdate['USU_IMAGEM'] = ['@imgVAR', $this->image];
		}

		try {
			$con = new Connection('MoldeArt');
			
			// Montar Query
			$query = 'UPDATE E_Usuario SET ';
			$vars = array();

			foreach ($toUpdate as $key => $value) {
				$query .= $key . ' = ' . $value[0] . ', ';
				$vars[$value[0]] = $value[1];
			}
			
			$query = substr($query, 0, strlen($query) - 2) . ' ';
			$query .= 'WHERE USU_COD = @codVAR';
			$vars['@codVAR'] = $this->cod;

			$con->dbExec($query, $vars);
		} catch (Exception $e) {
			echo $e;
			exit();
		}
	}

	public function projects($filter = 'my')
	{
		switch ($filter) {
			case 'my':
				try {
					$query = 'SELECT * FROM E_Artefato WHERE USU_COD = @usuVAR';
					$vars = array('@usuVAR' => $this->cod);

					$con = new Connection('MoldeArt');
					$projetos = $con->dbExec($query, $vars);

					if (!empty($projetos) and !isset($projetos[0])) {
						$back = $projetos;
						unset($projetos);
						$projetos[0] = $back;
					}

					return $projetos;
				} catch (Exception $e) {
					return 'Desculpe, houve um erro interno. Contate o suporte ou tente novamente mais tarde.';
				}
				break;
		}
	}










	/**
	 * Setters
	 */
	public function setCod(int $cod)
	{
		$this->cod = $cod;
	}
	public function setNome(string $nome)
	{
		$this->nome = $nome;
	}
	public function setSobrenome(string $sobrenome)
	{
		$this->sobrenome = $sobrenome;
	}
	public function setEmail(string $email)
	{
		$this->email = $email;
	}
	public function setSenha(string $senha)
	{
		$this->senha = $senha;
	}
	public function setImage(string $image)
	{
		$this->image = $image;
	}


	/**
	 * Getters
	 */
	public function getCod()
	{
		return $this->cod;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function getSobrenome()
	{
		return $this->sobrenome;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getImage()
	{
		return $this->image;
	}
	public function isAdmin()
	{
		return $this->admin;
	}
}
