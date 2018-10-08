<?php if (!defined('RAIZ')) exit(); ?>
<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/jquery.js'></script>
<script type='text/javascript' src='<?=URL_VIEWS?>/_materialize/js/materialize.js'></script>
<script> 
		//Inicializações
		$(document).ready(function(){
			$('.dropdown-trigger').dropdown();
			$('.carousel').carousel();
			$('.modal').modal();
			$('select').material_select();
		});

		// Preview de imagens
		$('#img').change(function () {
			const arquivo = $(this)[0].files[0];
			const fileReader = new FileReader()

			fileReader.onloadend = function () {
				$('#img_demo').attr('src', fileReader.result);
			}

			fileReader.readAsDataURL(arquivo);
		});
	</script>
	
	<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/jfunctions.js'></script>

	<?php
	if (!empty($_SESSION['msg'])) {
		include PATH_MODALS . '/message.php';
		unset($_SESSION['msg']);
	}
	?>
</body>
</html>
