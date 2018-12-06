<?php if (!defined('RAIZ')) exit(); ?>

<section>
    <!-- carroussel -->
    <label class="left black-text flow-text">Mais novos</label>
    <?php if (!empty($arts) and (count($arts) > 5)): ?>
    <a class="right blue-text flow-text">Ver +</a>
    <?php endif ?>
    
    <div class="carousel">
        <?php if (!empty($arts)): ?>
        <?php foreach ($arts as $key => $art):?>

        <a class="carousel-item" href="<?=INDEX?>/projeto?cod=<?=$art['ART_COD']?>">
            <div class="card" style="background-color: rgb(202,164,115);">
                <div class="card-content">
                    <img src="<?=URL_UPLOAD . '/' . $art['ART_IMAGEM']?>" class="responsive-img" style="height: 150px">
                    <label class="black-text flow-text truncate"><?=$art['ART_NOME']?></label>
                </div>
            </div>
        </a>

        <?php endforeach ?>
        <?php else: ?>
            <h5 class="center">Desculpe, ainda não temos artefatos disponíveis... :(</h5>
        <?php endif ?>
    </div>
 </section>
