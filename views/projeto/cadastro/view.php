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

figure:hover figcaption {
    box-shadow: 2px 2px 2px #9c5a29;
}

figure .responsive-img {
    max-height: 100% !important;
}


#saveProject {
    margin-top: 0.2em;
    margin-right: 0.3em;
    margin-bottom: 1em;
    display: none;
}
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

    figure:hover figcaption {
        box-shadow: 2px 2px 2px #9c5a29;
    }

    figure .responsive-img {
        max-height: 100% !important;
    }


    #saveProject {
        margin-top: 0.2em;
        margin-right: 0.3em;
        margin-bottom: 1em;
        display: none;
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
    <section class="row" title="Cadastrar projeto" style="background-color: rgb(222, 184, 135);       margin-top: 0.5em; padding: 1em 2em" id="containerNovoProjeto">

        <?php if (empty($_SESSION['artefato'])): ?>
        <form class="row" id="novoPasso" action="<?=INDEX?>/novo_projeto/novo_passo" method="post" style="display: none;">
            <h4 class="flow-text">Novo Passo</h4>
            <div class="input-field col s12 l8">
                <textarea class="materialize-textarea" name="descPasso" id="descPasso" style="min-height: 125px" required></textarea>
                <label>Descrição</label>
            </div>
            <div class="col l4" id="img_btn">
                <figure class="input-field col s10 push-s1" style="margin: 0 !important" onclick="document.getElementById('imgNew').click()">
                    <input type="file" name="img_passo" id="imgNew" class="hide img" onchange="changeDemo('img_demo0', this)" accept="image/jpeg, image/jpg, image/png" required>
                    <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo0">
                    <figcaption class="molde-brown">Capa do projeto</figcaption>
                </figure>
            </div>
        </form>


        <form method="POST" action="<?=INDEX?>/novo_projeto" new-action="<?=INDEX?>/novo_projeto/novo_passo" id="formCadastrarProjeto" enctype="multipart/form-data" btn-id="btnNovoProjeto">
            <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
                <div class="row container" style="margin: auto;">
                    <h5 class="">Cadastrar Projeto</h5>

                    <div class="input-field col s12">
                        <input type='text' name="nome" class='validate' required>
                        <label>Nome</label><br>
                    </div>

                    <select name="categoria" class="validate col s12" required>
                        <option disabled="">Categoria</option>
                        <option value="Decoração">Decoração</option>
                        <option value="Jardinagem">Jardinagem</option>
                        <option value="Customização">Customização</option>
                        <option value="Presentes">Presentes</option>
                    <select>
                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="descricao"></textarea>
                        <label>Descrição</label>
                    </div>

                    <div class="input-field col s12" >
                        <input type="text" name="tags" class="validate">
                        <!--  <textarea name="tags" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea> -->
                        <label>Tags</label> 
                        <span class="helper-text">Tags são palavras chaves que representem seu projeto nas buscas, separe-as por vírgulas.</span>
                    </div>

                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" class="validate" name="materiais" required></textarea>
                        <label>Materiais necessários</label>
                        <span class="helper-text">A cada elemento listado, aperte a tecla ENTER</span>
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
        <a id="saveProject" action="<?=INDEX?>/novo_projeto/salvar" class="btn-flat white-text molde-brown right"> <i class="fas fa-check-circle"></i> Salvar Projeto</a>
    </div>

    <?php if (!empty($_SESSION['artefato'])): ?>
    <script type="text/javascript">
        document.getElementById('buttons').style.display = "block";
    </script>
    <?php endif ?>
</div>
