<?php if (!defined('RAIZ')) exit(); ?>
<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/jquery.js'></script>
<script type='text/javascript' src='<?=URL_VIEWS?>/_materialize/js/materialize.js'></script>
	<script> 
		//Inicialização DropDown
		$(document).ready(function(){
			$('.dropdown-trigger').dropdown();
		});
		//Inicialização Carousel
		$(document).ready(function(){
			$('.carousel').carousel();
		});
	</script>
	
<script type='text/javascript' src='<?=URL_VIEWS?>/_javascript/jfunctions.js'></script>
</body>
</html>
