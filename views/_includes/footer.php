<?php if (!defined('RAIZ')) exit(); ?>
<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/jquery.js'></script>
<script type='text/javascript' src='<?=URL_VIEWS?>/_materialize/js/materialize.js'></script>
<script> 
		//Inicializações
		$(document).ready(function(){
			$('.dropdown-trigger').dropdown();
			$('.carousel').carousel();
			$('.modal').modal();
			$('.tooltipped').tooltip();
		});

		// Preview de imagens
		$('.img').change(function () {
			var target = document.getElementById($(this).attr('target-demo'));

			const arquivo = $(this)[0].files[0];
			const fileReader = new FileReader();

			fileReader.onloadend = function () {
				$(target).attr('src', fileReader.result);
			}

			fileReader.readAsDataURL(arquivo);
		});

		function changeDemo(targetDemo, element) {
			var target = document.getElementById(targetDemo);

			const arquivo = $(element)[0].files[0];
			const fileReader = new FileReader();

			fileReader.onloadend = function () {
				$(target).attr('src', fileReader.result);
			}

			fileReader.readAsDataURL(arquivo);
		}
	</script>
	
	<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/jfunctions.js'></script>
	<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/ajax.js'></script>

	<?php include PATH_MODALS . '/message.php';	?>
</body>
</html>
