<?php if (!defined('RAIZ')) exit(); ?>
<!-- Aumentar tamanho da fonte -->
<style type="text/css">
div.input-field input[type=text],
div.input-field label {
	font-size: 1.2em !important;
}
</style>

<!-- Lembrar de tratar links com URL amigavel, nao pelo path absoluto -->
<div class='row'>
	<main class='col s10 push-s2 l8 push-l2 white-text' style='/*background: rgba(139,74,0,0.8)*/ background: rgba(49, 24, 0, 0.7); padding: 50px 0;'>
		<div class='row'>
			<div class="col s10 push-s1">
				<form class='row' name='cadastroUsuario' method='POST' action='<?=INDEX?>/novo_usuario'>
					<div class='input-field col s6'>
						<input type='text' name='nome' class='validate' required>
						<label style='color: #FFF59D'>Nome:</label>
					</div>
					<div class='input-field col s6'>
						<input type='text' name='sobrenome' class='validate' required>
						<label style='color: #FFF59D'>Sobrenome:</label>
					</div>
					<div class='input-field col s12'>
						<input type='text' name='email' class='validate' required>
						<label style='color: #FFF59D'>E-mail:</label>
					</div>
					<div class='input-field col s6'>
						<input type='password' name='senha' class='validate' required>
						<label style='color: #FFF59D'>Senha:</label>
					</div>
					<div class='input-field col s6'>
						<input type='password' name='confirmaSenha' class='validate' required>
						<label style='color: #FFF59D'>Digite a senha novamente:</label>
					</div>
					<div class='col s8 push-s2'>
						<div class='row' style="margin-bottom: 0">
							<button class='waves-effect waves-light btn col s6 yellow lighten-2 btnCadastro' style='color: #45260B; width: calc(50% - 0.25em); margin-right: 0.5em' >
								<!--class='col s6 center btn' type='submit' name='cadastraUsuario'-->
								Cadastrar
							</button>
							<a class='waves-effect waves-light btn col s6 yellow lighten-2 btnCadastro' style='color: #45260B; width: calc(50% - 0.25em);' href='<?=INDEX?>'>
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