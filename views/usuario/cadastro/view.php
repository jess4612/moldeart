<?php if (!defined('RAIZ')) exit(); ?>
<!-- Aumentar tamanho da fonte -->
<style type="text/css">
div.input-field input[type=text],
div.input-field label {
    font-size: 1.2em !important;
}
</style>

<!-- Lembrar de tratar links com URL amigavel, nao pelo path absoluto -->
<div class='row container'>
    <main class='col s12 l8 push-l2 white-text' style='/*background: rgba(139,74,0,0.8)*/ background: rgba(49, 24, 0, 0.7); padding: 20px 0;'>
        <div class='row' style="margin-bottom: 0">
            <div class="col s10 push-s1">
                <h5 class='center' style='color: #FFF59D'>Cadastre-se</h5>
                <form class='row' name='cadastroUsuario' method='POST' action='<?=INDEX?>/novo_usuario'>
                    <div class='input-field col s12 m6'>
                        <input type='text' name='nome' class='validate' required>
                        <label style='color: #FFF59D'>Nome:</label>
                    </div>
                    <div class='input-field col s12 m6'>
                        <input type='text' name='sobrenome' class='validate' required>
                        <label style='color: #FFF59D'>Sobrenome:</label>
                    </div>
                    <div class='input-field col s12'>
                        <input type='text' name='email' class='validate' required>
                        <label style='color: #FFF59D'>E-mail:</label>
                    </div>
                    <div class='input-field col s12 m6'>
                        <input type='password' name='senha' class='validate' required>
                        <label style='color: #FFF59D'>Senha:</label>
                    </div>
                    <div class='input-field col s12 m6'>
                        <input type='password' name='confirmaSenha' class='validate' required>
                        <label style='color: #FFF59D'>Digite a senha novamente:</label>
                    </div>

                    <!-- Em caso de erros, serão mostrados aqui -->
                    <?php if (!empty($_SESSION['msg'])): ?>
                    <div class='yellow-text col s12' style="margin-bottom: 10px">
                        <p><?=$_SESSION['msg']?></p>
                        <?php unset($_SESSION['msg']); ?>
                    </div>
                    <?php endif ?>

                    <style type="text/css">
                        @media only screen and (min-width: 1024px) {
                            div.col.s8.push-s2 div.row button.btn,
                            div.col.s8.push-s2 div.row a.btn {
                                width: calc(50% - .25em);
                            }
                        }
                    </style>

                    <div class='col s8 push-s2'>
                        <div class='row' style="margin-bottom: 0">
                            <button class='waves-effect waves-light btn col s12 l6 yellow lighten-2 btnCadastro' style='color: #45260B; margin-right: 0.5em; margin-bottom: 0.3em' >
                                <!--class='col s6 center btn' type='submit' name='cadastraUsuario'-->
                                Cadastrar
                            </button>
                            <a class='waves-effect waves-light btn col s12 l6 yellow lighten-2 btnCadastro' style='color: #45260B;' href='<?=INDEX?>'>
                                <!--class='col s6 center' type='submit'-->
                                <!-- <p><a href='<?=RAIZ?>/index.php'> Voltar </a> </p> -->
                                Voltar  
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>