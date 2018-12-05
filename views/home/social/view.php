<style type="text/css">
    main {
        background: rgb(222,184,135);
        margin-top: 1em !important;
        padding: 1em;
    }
</style>
<main class="row container">
    <?php if ($_SESSION['userdata']->isAdmin()): ?>
    <div class="row" style="margin-right: 0">
        <a class="btn molde-brown right" href="<?=INDEX?>/home/social/restrita">Area restrita</a>
    </div>
    <?php endif ?>

    <h5>Bem vindo(a) ao Molde Social!!</h5>

    <?php if (!empty($posts)): ?>
    <?php foreach ($posts as $key => $post): ?>
    <div class="row">
        <h5 class="col s12"><?=$post['POS_NOME']?> <span class="right"><?=implode('.', array_reverse(explode('-', $post['POS_DATA'])))?></span></h5>
        <img src="<?=URL_UPLOAD?>/<?=$post['POS_CAPA']?>" class="col s12 m6 l3">
        <p class="flow-text"><?=$post['POS_TEXTO']?></p>
        <div class="carousel">
            <?php foreach (unserialize($post['POS_IMAGENS']) as $key => $value): ?>

            <a class="carousel-item" href="#!"><img src="<?=URL_IMG?>/thumb.php?src=<?=RAIZ?>/views/_upload/<?=$value?>&size=300x250"></a>

            <?php endforeach ?>
        </div>
    </div>


</main>
