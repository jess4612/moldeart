<?php
namespace Classes;
use \Connection\Connection;

/**
 * Gerenciamento de postagens no molde social
 */
class Postagem
{
    private $nome;
    private $texto;
    private $files;
    private $nomeCapa;
    private $imgNames;
    private $userCod;
    private $message;


    function __construct(string $nome, string $texto, array $files, int $userCod)
    {
        $this->nome = $nome;
        $this->texto = $texto;
        $this->files = $files;
        $this->userCod = $userCod;
    }

    public function moveImgs() : bool
    {
        try {
            $this->imgNames[] = $this->uploadImg($this->files['img1']);

            foreach ($this->files as $key => $value) {
                if (preg_match('/img*/', $key) and !empty($value['tmp_name'])) {
                    echo '<br>';
                    var_dump($value);
                    echo "<br>";

                    $this->imgNames[] = $this->uploadImg($value);
                }
            }
            $this->imgNames = serialize($this->imgNames);
            return true;
        } catch (Exception $e) {
            $this->message = $e;
            return false;
        }
    }


    public function cadastrar()
    {
        try {
            $query = 'INSERT INTO E_Postagem (POS_NOME, POS_TEXTO, POS_CAPA, POS_IMAGENS, POS_DATA, USU_COD)';
            $query .= 'VALUES (@nomeVAR, @textoVAR, @capaVAR, @imgVAR, @dataVAR, @usuVAR)';

            $vars = array(
                '@nomeVAR' => $this->nome,
                '@textoVAR' => $this->texto,
                '@capaVAR' => $this->nomeCapa,
                '@imgVAR' => $this->imgNames,
                '@dataVAR' => date('Y-m-d'),
                '@usuVAR' => $this->userCod
            );

            $con = new Connection('MoldeArt');
            $con->dbExec($query, $vars);
            $this->message = 'Cadastro efetuado com sucesso.';
        } catch (Exception $e) {
            $this->message = 'Ocorreu um erro interno, contate o suporte.';
        }
    }

    public function getMessage()
    {
        return $this->message;
    }

    private function uploadImg($file)
    {
        /* Validar tipo de imagem */
        $type = explode('/', $file['type']);
        $type = end($type);

        if(!in_array($type, array('png', 'jpg', 'jpeg'))) {
            // var_dump($file);
            $this->message = "Formato de imagem invalido ou imagem não enviada.";
        }

        /* Renomear arquivo e movê-lo */
        $imgName =  $file['name'] . time() . '.' . $type;

        $up = null;
        $up = RAIZ . '/views/_upload/' . $imgName;

        move_uploaded_file($file['tmp_name'], $up);
        chmod($up, 775);

        /* DEBUG */
        // echo UPLOAD_PATH . '<br />';
        // print_r($file);

        
        return $imgName;
    }
}
