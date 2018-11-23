<style type="text/css">
    main {
        background: rgb(222,184,135);
        margin-top: 1em !important;
        padding: 1em;
    }
</style>
<main class="row container">
    <?php if ($_SESSION['userdata']->isAdmin()): ?>
    <a class="btn molde-brown right" href="<?=INDEX?>/home/social/restrita">Area restrita</a>
    <?php endif ?>
</main>
