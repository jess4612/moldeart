<?php if (!defined('RAIZ')) exit();?>
<style type="text/css">
	.card {
		padding: 0 !important;
	}
	.card .card-content {
		padding: 8px;
	}
	main div.row.center-align {
		padding: 0.6em;
	}

	.carousel {
		height: 250px;
	}

	a.flow-text.blue-text.right {
		cursor: pointer;
	}
	@media only screen and (min-width: 1024px) {
		.card .card-content {
			padding: 10px;
		}
		main div.row.center-align {
			padding: 1em;
		}
	}
</style>
<main class="container" style="">
	<?php include PATH_SECTIONS . '/important.php';?>

	<label id="tutoriais" class="col s12 flow-text black-text" style="padding: 0.3em 0.6em 0.15em 0.6em; background-color: rgb(222,184,135);">Tutoriais</label>
	<label id="produtos" class="col s12 flow-text black-text" style="padding: 0.3em 0.6em 0.15em 0.6em; background-color: rgb(252,214,165); cursor: pointer">EM BREVE!</label>

	<div id="tutoriais_content" class="row center-align" style="background-color: rgb(222,184,135); margin-top: 0 !important;">
		<?php include PATH_SECTIONS . '/ultimos_vistos.php'; ?>
	</div>
	<div id="produtos_content" class="row center-align" style="background-color: rgb(222,184,135); margin-top: 0 !important;">
		<h5 class="center">Em breve teremos produtos a venda!</h5>
	</div>
</main>
	
