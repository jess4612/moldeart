<?php if (!defined('RAIZ')) exit(); ?>

<style type="text/css">
    form .input-field label {
        color: #FFF59D;
        text-align: center !important;
    }
</style>

<section title="Editar Perfil">
	<div class="row" style="background: rgba(139,69,19,0.7); margin-top: 1em;">
        <div class="col l4 push-l4 red">
    		<form class="row" name="editar_perfil" method="POST" action="<link do fomulario de acesso aó BD>">
    			<div class="input-field col s9">
                    <label>Nome</label>
                </div>
                <div class="input-field col s2">
                    <label>Editar</label><br>
    			</div>
    			<div class="input-field col s9">
    				<label>Sobrenome</label>
                </div>
                <div class="input-field col s2">
                    <label>Editar</label><br>
    			</div>
                <div class="input-field col s9">
                    <label>E-mail</label>
                </div>
                <div class="input-field col s2">
                    <label>Editar</label><br>
    			</div>
                <div class="input-field col s9">
                    <label>Senha</label>
    			</div>
    			<div class="input-field col s2">
                    <label>Editar</label><br>
    			</div>
    		</form>
        </div>
	</div>
</section>
