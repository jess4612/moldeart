<?php if(!defined('RAIZ')) exit(); ?>
<style type="text/css">
    figure figcaption {
        line-height: 2.3em;
        text-align: center;
        color: white;
    }
    figure {
        cursor: pointer;
        margin-top: 5em !important;
        height: 135px;
        text-align: center;
    }

<<<<<<< HEAD
    figure:hover figcaption {
        box-shadow: 2px 2px 2px #9c5a29;
    }

    figure .responsive-img {
        max-height: 100% !important;
    }
</style>

<button class="hide" id="editor"></button>

<!-- Icone de loading -->
<div class="hide" id="newStep">
    <input type="hidden" id="loadDataUrl" value="<?=INDEX?>/novo_projeto/novo_passo">
    <div class="loading" id="loading">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer" style="border-color: black !important;">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="row" title="Cadastrar projeto" style="background-color: rgba(179,109,59,0.7); margin-top: 0.5em; padding: 1em 2em" id="containerNovoProjeto">

        <?php if (empty($_SESSION['artefato'])): ?>
        <form method="POST" action="<?=INDEX?>/novo_projeto" new-action="<?=INDEX?>/novo_projeto/novo_passo" id="formCadastrarProjeto" enctype="multipart/form-data" btn-id="btnNovoProjeto">
            <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
                <div class="row container" style="margin: auto;">
                    <h5 class="">Cadastrar Projeto</h5>

                    <div class="input-field col s12">
                        <input type='text' name="nome" class='validate' required value="Vaso de flores">
                        <label>Nome</label><br>
                    </div>

                    <div class="input-field col s12">
                        <input type="text" name='categoria' class='validate' required value="Decoração">
                        <label>Categoria</label><br>
                    </div>

                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="descricao">Vaso de flores com aparência semelhante a de um vaso de flores. Parece-se com um vaso de flores e se trata de um recipiente que possui, como função principal,o armazenamento de flores e terra, que sujará sua casa quando seu neto acertar a bola nele.</textarea>
                        <label>Descrição</label>
                    </div>

                    <div class="input-field col s12" >
                        <input type="text" name="tags" class="validate" value="flores, terra, vaso, prateleira, plantas, rosas, folhas">
                        <!--  <textarea name="tags" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea> -->
                        <label>Tags</label> 
                        <span class="helper-text">Tags são palavras chaves que representem seu projeto nas buscas, separe-as por vírgulas.</span>
                    </div>

                    <button type="submit" class="btn molde-brown col s10 push-s1 l6 push-l3" id="btnNovoProjeto">
                        Cadastrar
                    </button>
                </div>
            </div>
            <div class="col l4" id="img_btn">
                <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img').click()">
                    <input type="file" name="img_proj" id="img" class="hide img" target-demo="img_demo" accept="image/jpeg, image/jpg, image/png">
                    <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo">
                    <figcaption class="molde-brown">Capa do projeto</figcaption>
                </figure>
            </div>
        </form>
        <?php else: ?>
        <?= $_SESSION['artefato']->forms(); ?>
        <?php endif ?>
    </section>

    <div id="buttons" style="display: none">
        <span class="helper-text">* Para fazer alterações em um passo, altere a informação desejada e clique no link "Editar" daquele passo.</span>
        <a id="addStep" class="btn-floating molde-brown right tooltipped" data-tooltip="Adicionar Passo" data-position="right"> <i class="fas fa-folder-plus"></i> </a>
        <?php if (isset($_SESSION['artefato']) and $_SESSION['artefato']->getPassos()): ?>
        <a id="saveProject" action="<?=INDEX?>/novo_projeto/salvar" class="btn-flat white-text molde-brown right" style="margin-top: 0.2em; margin-right: 0.3em; margin-bottom: 1em"> <i class="fas fa-check-circle"></i> Salvar Projeto</a>
        <?php endif ?>
    </div>

    
    <?php if (!empty($_SESSION['artefato'])): ?>
    <script type="text/javascript">
        document.getElementById('buttons').style.display = "block";
    </script>
    <?php endif ?>
</div>
=======
<section class="row container" title="Cadastrar projeto" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
    <form class="row " name="cadastrar_perfil" method="POST" action="" id="" enctype="multipart/form-data" style="margin: 0">
        <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
            <div class="row container" style="margin: auto;">
                <h5 class="">Cadastrar Projeto</h5>

                <div class="input-field col s12">
                    <input type='text' name='nome' class='validate' value="" required>
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Nome:</label><br>
                </div>

                <div class="input-field col s12">
                <select>
                        <option disabled="">Categoria</option>
                        <option>Decoração</option>
                        <option>Jardinagem</option>
                        <option>Customização</option>
                        <option>Presentes</option>
                    <select>
                </div>

                        <div class="input-field col s12" >
                            <textarea name="descricao" class="materialize-textarea" class="validate" required></textarea>
                            <label style="color: rgb(139,69,19);">Descrição:</label> 
                        </div>

                        <div class="input-field col s12" >
                            <textarea name="tags" class="materialize-textarea" class="validate" required></textarea>
                            <label style="color: rgb(139,69,19);">Tags:</label> 
                        </div>

                        <div class="col l4" id="img_btn">
                            <div class="input-field col s10" title="Fotos do Projeto" id="">
                                <input type="file" name="img_proj" id="img" class="hide" accept="image/jpeg, image/jpg, image/png">
                                <img src="" class="responsive-img" onclick="document.getElementById('img').click()" id="img_demo">
                                <label>Fotos do projeto:</label>
                            </div>
                        </div>

                        <a class="btn col s6 modal-trigger" style="background: rgba(139,69,19,0.7); margin-bottom: 2em" href="">
                            Cadastrar
                        </a>

                    </form>
                </section>
>>>>>>> 9c6083628ea5f8e7e2886cfacd65f84d0eebd27f
