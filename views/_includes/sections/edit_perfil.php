<?php if (!defined('RAIZ')) exit(); ?>

<style type="text/css">
form .input-field label {
    color: #FFF59D;
}
</style>

<section class="row container" style="background: rgba(139,69,19,0.7); margin: auto; margin-top: 1em;" title="Editar Perfil">
    <div class="col l7 push-l1" style="margin-bottom: 1em; margin-left: 0em;">
        <form class="row " name="editar_perfil" method="POST" action="<link do fomulario de acesso ao BD>">

            <div class="input-field col s12">
                <input type='text' name='nome' class='validate'>
                <label style='font-size: 1.2em;'>Nome (Já cadastrado)</label><br>
            </div>

            <div class="input-field col s12">
                <input type='text' name='sobrenome' class='validate'>
                <label style='font-size: 1.2em;'>Sobrenome (Já cadastrado)</label><br>
            </div>

            <div class="input-field col s12" >
                <input type='email' name='email' class='validate'>
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

            <button class='btn col s6 push-s3' style='background: rgba(139,69,19,0.7);'>
                Editar
            </button>
        </form>
    </div>
    <div class="col l4 right" style="margin-top: 5em;">
        <i class="fas fa-user-circle fa-10x black-text"></i><br>
        <div class="input-field col s9">
            <label style='font-size: 1.2em;'>Editar foto</label><br><br><br>
        </div>
    </div>
</section>
