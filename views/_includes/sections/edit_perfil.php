<?php if (!defined('RAIZ')) exit(); ?>
<?php include PATH_MODALS . '/confirmaEdicao.php'; ?>

<style type="text/css">
form .input-field label {
    color: #FFF59D;
}

@media only screen and (min-width: 1024px) {
    #img_btn {
        margin-top: 5em;
    }
}
</style>

<section class="row container" style="background: rgba(139,69,19,0.7); margin: auto; margin-top: 1em;" title="Editar Perfil">
    <form class="row " name="editar_perfil" method="POST" action="<?=INDEX?>/alterar_conta" id="formEditarPerfil" enctype="multipart/form-data">
        <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
            <div class="row container" style="margin: auto;">
                <h5 class="center">Meus dados</h5>

                <div class="input-field col s12">
                    <input type='text' name='nome' class='validate' value="<?=$_SESSION['userdata']->getNome()?>">
                    <label style='font-size: 1.2em;'>Nome (Já cadastrado)</label><br>
                </div>

                <div class="input-field col s12">
                    <input type='text' name='sobrenome' class='validate' value="<?=$_SESSION['userdata']->getSobrenome()?>">
                    <label style='font-size: 1.2em;'>Sobrenome (Já cadastrado)</label><br>
                </div>

                <div class="input-field col s12" >
                    <input type='email' name='email' class='validate' value="<?=$_SESSION['userdata']->getEmail()?>">
                    <label style='font-size: 1.2em;'>E-mail (Já cadastrado)</label><br>
                </div>

                <div class='input-field col s12'>
                    <label style='color: #FFF59D; font-size: 1.3em;'>Senha:</label>
                    <input type='password' name='senha' class='validate'>
                </div>

                <div class='input-field col s12'>
                    <label style='color: #FFF59D; font-size: 1.3em;'>Confirma Senha:</label>
                    <input type='password' name='confirmaSenha' class='validate'>
                </div>
            </div>
        </div>
        <div class="col l4" id="img_btn">
            <div class="input-field col s10 push-s1" title="Alterar Foto">
                <input type="file" name="img" id="img" class="hide" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/user-default.png" class="responsive-img" style="width: 100%; cursor: pointer; max-height: 200px;" onclick="document.getElementById('img').click()" id="img_demo">
            </div>
            <a class="btn col s10 push-s1 modal-trigger" style="background: rgba(139,69,19,0.7); margin-top: 30px;" href="#confirmaEdicao">
                Editar
            </a>
        </div>
    </form>
</section>
