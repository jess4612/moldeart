<?php if (!defined('RAIZ')) exit(); ?>
<div class="modal" id="messageModal">
    <div class="modal-content">
        <h4>Aviso</h4>
        <div class="container flow-text"><?=$_SESSION['msg']?></div>
        <button class="btn modal-close">Fechar</button>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#messageModal').modal('open');
    });
</script>
