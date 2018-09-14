<?php if (!defined('RAIZ')) exit(); ?>
<!-- Atencao ao definir urls, usar url amigavel -->
<div class='row container'>
    <main class='col s12 l8 push-l2 white-text' style='background: rgba(49, 24, 0, 0.7);'>
        <div class='row'>
            <section class='col s10 push-l1'>
                <h5 class='center' style='color: #FFF59D'> Entrar</h5>
                <form class='row' name='login' method='POST' action='<?=INDEX?>/logar'> <!-- Correto -->
                    <div class='input-field col s12'>
                        <input type='email' name='email' class='validate'required>
                        <label style='color: #FFF59D'>E-mail</label>
                    </div>
                    <div class='input-field col s12'>
                        <input type='password' name='senha' class='validate' required>
                        <label style='color: #FFF59D'>Senha</label>
                    </div>
                    <!-- Em caso de erro, ele será mostrado aqui -->
                    <?php if (!empty($_SESSION['error'])): ?>
                    <div class='red-text col s12' style="margin-bottom: 10px">
                        <p><?=$_SESSION['error']?></p>
                    </div>
                    <?php endif ?>
                    <?php if (!empty($_SESSION['msg'])): ?>
                    <div class='yellow-text col s12' style="margin-bottom: 10px">
                        <p><?=$_SESSION['msg']?></p>
                        <?php unset($_SESSION['msg']); ?>
                    </div>
                    <?php endif ?>
                    <button class='btn col s6 push-s3 yellow lighten-3' style='color: #45260B'>
                        Logar
                    </button>
                    <p class='col s12 center'>
                        <!-- Arrumei o link e organizei os diretorios (se vc tiver duvidas em relacao a isso me avise) -->
                        Não é cadastrado? <br><a href='<?=INDEX?>/usuario/cadastro' class='yellow-text text-lighten-3'>Clique Aqui</a>
                    </p>
                </form>
            </section>
        </div>
    </main>
</div>

