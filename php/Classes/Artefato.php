<?php
namespace Classes;
use \Connection\Connection;

/**
 * Classe referente aos artefatos(projetos) do site
 */
class Artefato
{
    private $nome;
    private $categoria;
    private $descricao;
    private $tags;
    private $image;

    private $data;
    private $cod;
    private $passos;
    private $views;
    private $dono;


    /**
     * Valida os dados antes do cadastro
     * 
     * Se tudo estiver OK, retorna false
     */
    public function validaDados()
    {
        // Nome deve ser não nulo
        if (!empty($nome)) {
            return 'Informe o nome de seu projeto.';
        }

        // Categoria deve ser não nula
        if (!empty($categoria)) {
            return 'Informe a categoria de seu projeto.';
        }

        // Checar tipo da imagem
        ## validar tipo de imagem
        $type = explode('/', $this->image['type']);
        $type = end($type);
        if(!in_array($type, array('png', 'jpg', 'jpeg'))) {
            return 'Envie uma imagem válida, por favor.';
        }

        if (empty($this->image)) {
            return 'Envie uma imagem.';
        }

        $this->image['nomeImagem'] = time() . '.' . $type;
        
        $this->descricao = str_replace(PHP_EOL, '<br>', $this->descricao);

        $this->tags = explode(',', $this->tags);
        $this->tags = array_map('trim', $this->tags);
        $this->tags = serialize($this->tags);
        return false;
    }

    /**
     * Configura os dados do artefato em processo de cadastramento para ser
     * armazenado na $_SESSION
     */
    public function iniciarCadastro()
    {
        $msg = $this->validaDados();
        if (!$msg) {
            $this->data = date('Y-m-d');
            $this->dono = $_SESSION['userdata']->getCod();

            try {
                // Mover imagem
                // $up = PATH_VIEWS . '/_upload/' . $this->image['nomeImagem'];
                // move_uploaded_file($this->image['tmp_name'], $up);
                // chmod($up, 775);

                return 'OK';
            } catch (Exception $e) {
                return 'Ocorreu um erro interno, desculpe. Contate o suporte.';
            }
        } else {
            return $msg;
        }
    }


    /**
     * Monta o html dos passos e formularios mostrados
     */
    public function forms()
    {
        $html = '';

        if (is_array($this->passos)) {
            foreach ($this->passos as $key => $passo) {
                $html .= $this->proxPasso($key, $passo);
            }
        }

        $html .= '
            <form class="row" id="novoPasso" action="' . INDEX . '/novo_projeto/novo_passo" method="post">
                <h4 class="flow-text">Novo Passo</h4>
                <div class="input-field col s12 l8">
                    <textarea class="materialize-textarea" name="descPasso" id="descPasso" style="min-height: 125px" required></textarea>
                    <label>Descrição</label>
                </div>
                <div class="col l4" id="img_btn">
                    <figure class="input-field col s10 push-s1" style="margin: 0 !important" onclick="document.getElementById(\'imgNew\').click()">
                        <input type="file" name="img_passo" id="imgNew" class="hide img" onchange="changeDemo(\'img_demo0\', this)" accept="image/jpeg, image/jpg, image/png" required>
                        <img src="'.URL_IMG.'/background/florBg.jpg" class="responsive-img" id="img_demo0">
                        <figcaption class="molde-brown">Capa do projeto</figcaption>
                    </figure>
                </div>
            </form>
        ';

        return $html;
    }


    private function proxPasso($key, $passo)
    {
        $image = '';
        $imagePath = '';
        if (file_exists(PATH_VIEWS . '/_upload/tmp/' . $passo['nomeImg'])) {
            $image = URL_VIEWS . '/_upload/tmp/' . $passo['nomeImg'];
            $imagePath = PATH_VIEWS . '/_upload/tmp/' . $passo['nomeImg'];
        } else {
            $image = URL_VIEWS . '/_upload/' . $passo['nomeImg'];
            $imagePath = PATH_VIEWS . '/_upload/' . $passo['nomeImg'];
        }

        $return = '
            <form class="row" id="passo'.($key + 1).'" action="' . INDEX . '/novo_projeto/alterar_passo" method="POST" class="editStepForm" enctype="multipart/form-data">
                <h4 class="flow-text">
                    Passo '.($key + 1).'
                    <button id="editPasso'.($key + 1).'" target="passo'.($key + 1).'" onclick="var elemento = document.getElementById(\'editor\'); elemento.setAttribute(\'target\', this.getAttribute(\'target\')); elemento.setAttribute(\'owner\', this.getAttribute(\'id\')); elemento.click()" class="cleared molde-brown-text" title="Editar"><i class="fas fa-edit"></i></button>
                </h4> 
                
                <input type="hidden" name="keyStep" value="'.$key.'">
                <div class="input-field col s12 l8">
                    <textarea class="materialize-textarea" name="descPasso" style="min-height: 125px" required>'.$passo['descricao'].'</textarea>
                    <label class="active">Descrição</label>
                </div>
                <div class="col l4" id="img_btn">
                    <figure class="input-field col s10 push-s1" style="margin: 0 !important" onclick="document.getElementById(\'img'.($key + 1).'\').click()">
                        <input type="file" name="img_passo" id="img'.($key + 1).'" class="hide img" onchange="changeDemo(\'img_demo'.($key + 1).'\', this)" accept="image/jpeg, image/jpg, image/png" required>
                        <img src="'.$image.'" class="responsive-img" id="img_demo'.($key + 1).'">
                        <figcaption class="molde-brown">Capa do projeto</figcaption>
                    </figure>
                </div>
            </form>
        ';

        return $return;
    }


    public function editStep($key, $desc, $img)
    {
        if (isset($this->passos[$key])) {
            if (!empty($desc)) {
                $this->passos[$key]['descricao'] = $desc;
            }
            if (!empty($img)) {
                $tipo = explode('/', $img['type']);
                $tipo = end($tipo);
                $nomeImg = time() . '.' . $tipo;

                // Mover imagem
                $up = PATH_VIEWS . '/_upload/tmp/' . $nomeImg;
                move_uploaded_file($img['tmp_name'], $up);
                chmod($up, 775);

                $this->passos[$key]['image'] = $img;
                $this->passos[$key]['nomeImg'] = $nomeImg;
            }
        }
    }


    /**
     * Salva artefato no banco de dados
     */
    public function save()
    {
        try {
            $con = new Connection('MoldeArt');

            $query = 'INSERT INTO E_Artefato(ART_NOME, ART_CATEGORIA, ART_IMAGEM, ART_TUTORIAL, ART_DATA, ART_TAGS, ART_DESCRICAO, USU_COD)';
            $query .= ' VALUES (@nomeVAR, @categVAR, @imgVAR, @tutorialVAR, @dataVAR, @tagsVAR, @descVAR, @userVAR)';

            $vars = array(
                '@nomeVAR' => $this->nome,
                '@categVAR' => $this->categoria,
                '@imgVAR' => $this->image['nomeImagem'],
                '@tutorialVAR' => serialize($this->passos),
                '@dataVAR' => $this->data,
                '@tagsVAR' => $this->tags,
                '@descVAR' => $this->descricao,
                '@userVAR' => $_SESSION['userdata']->getCod()
            );

            $con->dbExec($query, $vars);
            unset($_SESSION['artefato']);
            $this->delTree(PATH_VIEWS . '/_upload/tmp/');
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    private function delTree($dir) 
    { 
        $files = array_diff(scandir($dir), array('.','..')); 
        foreach ($files as $file) { 
            (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
        }
    }













    /**
     * Getters
     */
    public function getNome() : string
    {
        return $this->nome;
    }
    public function getCategoria() : string
    {
        return $this->categoria;
    }
    public function getDescricao() : string
    {
        return $this->descricao;
    }
    public function getTags()
    {
        return $this->tags;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getData()
    {
        return $this->data;
    }
    public function getCod()
    {
        return $this->cod;
    }
    public function getPassos()
    {
        return $this->passos;
    }
    public function getViews()
    {
        return $this->views;
    }
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Setters
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setCategoria(string $categoria)
    {
        $this->categoria = $categoria;
    }
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function novoPasso($passo)
    {
        $tipo = explode('/', $passo['image']['type']);
        $tipo = end($tipo);
        $nomeImg = time() . '.' . $tipo;

        // Mover imagem
        $up = PATH_VIEWS . '/_upload/tmp/' . $nomeImg;
        move_uploaded_file($passo['image']['tmp_name'], $up);
        chmod($up, 775);

        $passo['nomeImg'] = $nomeImg;
        $this->passos[] = $passo;
    }
}
