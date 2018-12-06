<section class="row container" title="Meus projetos" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
    <!--<div class="col s6">
        <img class="responsive-img" src="<?=INDEX?>/views/_img/propagandas/presentes.png">
    </div>
        <h5><i><center> "Titulo do projeto" </center></i></h5>
        Categorias-->
        <section class="col s11">
            <div class="col s6">
                <h5><?=$art['ART_NOME']?></h5>
                <div class="row no-margin">
                    <img class="responsive-img" src="<?=URL_UPLOAD?>/<?=$art['ART_IMAGEM']?>">
                </div>
            </div>

            <div class="col s6" style="margin-top: 3em">
                <div class="row">
                    <strong class="col s8">Categoria:</strong>
                    <span class="col s4"><?=$art['ART_CATEGORIA']?></span>
                </div>
                <div class="row">
                    <strong class="col s8">Postado em:</strong>
                    <span class="col s4"><?=$art['ART_DATA']?></span>
                </div>
                <div class="row">
                    <strong class="col s12">Tags</strong>
                    <p class="col s12"><?=implode(', ', unserialize($art['ART_TAGS']))?></p>
                </div>
                <div class="row">
                    <strong class="col s9">Visualizações</strong>
                    <span class="col s3 truncate" title="+8000"><?=$art['ART_VIEWS']?></span>
                </div>
                <div class="divider molde-brown"></div>
                <div class="row">
                    <strong class="col s8">Postado por:</strong>
                    <span class="col s4"><?=$art['USU_NOME']?></span>
                </div>
            </div>
            <!-- Porque a linha daqui não funfa?? -->
            <div class="divider molde-brown"></div>
            <div class="row">

                <strong class="col s12">Descrição:</strong>
                <p class="col s12 right"><?=$art['ART_DESCRICAO']?></p>
                <div class="divider molde-brown"></div>
                <strong class="col s12">Materiais:</strong>
                <ul class="center">
                    <?php foreach (unserialize($art['ART_MATERIAIS']) as $key => $mat): ?>
                        <li><?=$mat?></li>
                    <?php endforeach ?>
                </ul>
                <div class="divider molde-brown col s12"></div>
                <strong class="col s12">Passo-a-passo:</strong>
                <?php foreach (unserialize($art['ART_TUTORIAL']) as $key => $passo): ?>
                    <div class="row">
                        <h5 class="col s12">Passo <?=($key + 1)?></h5>
                        <img src="<?=URL_UPLOAD?>/<?=$passo['nomeImg']?>" class="col s12 l4 right">
                        <p class="col s12 l8"><?=$passo['descricao']?></p>
                    </div>
                <?php endforeach ?>
            </div>

        </section>
    </section>
