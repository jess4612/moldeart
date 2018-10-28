<?php if (!defined('RAIZ')) exit(); ?>
<div class="modal" id="messageModal">
    <div class="modal-content">
        <h4>Aviso</h4>
        <div class="container flow-text" id="messageContent"></div>
        <button class="btn modal-close">Fechar</button>
    </div>
</div>

<?php if (isset($_SESSION['msg'])): ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#messageContent').text('<?=$_SESSION['msg']?>');
        $('#messageModal').modal('open');
    });
</script>
<?php unset($_SESSION['msg']); ?>
<?php endif ?>
