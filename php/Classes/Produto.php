<?php
namespace Classes;
use \Connection\Connection;

/**
 * Acoes referentes aos produtos
 */
class Produto
{
    private $nome;
    private $descricao;
    private $preco;
    private $quantidade;
    private $tags;
    private $projeto;
    private $img;

    /**
     * Cadastra novo produto no banco de dados
     */
    public function cadastrar()
    {
        $imgType = explode('/', $this->img['type']);
        $imgType = end($imgType);
        $imgName = time() . '.' . $imgType;

        $up = PATH_VIEWS . '/_upload/' . $imgName;

        move_uploaded_file($this->img['tmp_name'], $up);
        chmod($up, 775);

        try {
            $query = 'INSERT INTO E_Produto (PRO_NOME, PRO_DESCRICAO, PRO_PRECO, PRO_QUANTIDADE, PRO_TAGS, USU_COD, PRO_IMG';
            if (!empty($this->projeto)) {
                $query .= ', ART_COD';
            }
            $query .= ') VALUES (@nomeVAR, @descVAR, @precVAR, @qtdVAR, @tagsVAR, @usuVAR, @imgVAR';
            if (!empty($this->projeto)) {
                $query .= ', @artVAR';
            }
            $query .= ')';

            $vars = array(
                '@nomeVAR' => $this->nome, 
                '@descVAR' => $this->descricao,
                '@precVAR' => str_replace(',', '.', $this->preco),
                '@qtdVAR' => $this->quantidade,
                '@tagsVAR' => serialize($this->tags),
                '@usuVAR' => $_SESSION['userdata']->getCod(),
                '@artVAR' => (!empty($this->projeto)) ? $this->projeto : null,
                '@imgVAR' => $imgName
            );

            $con = new Connection('MoldeArt');
            $con->dbExec($query, $vars);
        } catch (Exception $e) {
            $_SESSION['msg'] = 'Houve um erro interno, desculpe.';
            unlink($up);
        }
    }






    /** ***************************
     * Setters
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setDescricao(string $desc)
    {
        $this->descricao = $desc;
    }
    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }
    public function setQuantidade(int $qtd)
    {
        $this->quantidade = $qtd;
    }
    public function setTags(string $tags)
    {
        $this->tags = array_map('trim', explode(',', $tags));
    }
    public function setProjeto(int $proj_cod)
    {
        $this->projeto = $proj_cod;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
}
