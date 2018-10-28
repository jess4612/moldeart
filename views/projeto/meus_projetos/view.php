<<<<<<< HEAD
<section class="row container" title="Meus projetos" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
	<h5><i><center> Meus Projetos </center></i></h5>
<div class="card col s3" style="margin:1em; background-color : rgba(139,69,19,0.4);">
	<div class="card-image waves-effect waves-block waves-light">
		<img class="activator" src="<?=INDEX?>/views/_img/categorias/festaJunina/Mesa.jpg">
	</div>
	<div class="card-content">
		<a href='<?=INDEX?>/produto'>
			<span class="card-title activator grey-text text-darken-4 center-align">Festa Junina
			<!--<i class="material-icons right">..</i></span>
			<p><a href="#"></a></p>-->
		</a>
	</div>
	<div class="card-reveal white-text" style="background-color : rgba(139,69,19,0.9);">
		<span class="card-title text-darken-4">Festa Junina<i class="material-icons right">X</i></span>
		<p>Pipipopopipipopopipipopo</p>
=======
<style type="text/css">
	.card {
		width: calc(((100% / 12) * 3) - 0.6em) !important;
		margin: 0.3em 0.3em !important;
	}

	.card-reveal {
		word-wrap: break-word;
		padding-left: 0.8em !important;
		overflow: none !important; 
		background-color: rgb(139, 69, 19) !important;
	}

	.card-content {
		padding: 15px 24px 10px 24px !important;
	}

	.card-image {
		margin-top:1em;
		height: 200px;
		display: flex;
	}

	.card button {
		margin: 1em 0;
	}

	p.description {
		text-align: justify;
		word-wrap: break-word;
		hyphens: auto;
	}
</style>

<section class="row container" title="Meus projetos" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
	<h5><i><center> Meus Projetos </center></i></h5>

	<?php foreach ($projetos as $key => $value): ?>
	<div class="card col s3" style="background-color : rgba(139,69,19,0.4);"  title="<?=$value['ART_NOME']?>">
		<!-- -->
		<div class="card-image waves-effect waves-block waves-light valign-wrapper">
			<img class="activator" src="<?=URL_UPLOAD?>/<?=$value['ART_IMAGEM']?>">
		</div>
		<div class="card-content">
			<span class="card-title activator grey-text text-darken-4 center-align truncate"><?=$value['ART_NOME']?></span>
		</div>


		<div class="card-reveal white-text">
			<span class="card-title text-darken-4 row">
				<span class="col s10 truncate"><?=$value['ART_NOME']?></span>
				<i class="far fa-times-circle right col s2" style="line-height: inherit;"></i>
			</span>

			<p class="black-text description"><?=$value['ART_DESCRICAO']?></p>
			<p>Quantidade de passos: <span class="right"><?=count(unserialize($value['ART_TUTORIAL']))?></span></p>
			<p>Visualizações: <span class="right"><?=$value['ART_VIEWS']?></span></p>
			<p>
				<span class="col s4 right-align"><i class="fas fa-thumbs-up"></i></span>
				<span class="col s4 right-align"><i class="fas fa-thumbs-down"></i></span>
				<span class="col s4 right-align"><i class="fas fa-comments"></i></span>
			</p>

			<button class="btn-flat right col s7 green-text">Ver mais</button>
		</div>
>>>>>>> 42a6f09eee4da2b5f66c68bd3dd0d8ef6bc25374
	</div>
	<?php endforeach ?>
</section>
