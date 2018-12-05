<?php if (!defined('RAIZ')) exit(); ?>
<div class="modal molde-brown no-hover white-text" id="messageModal">
    <div class="modal-content">
        <h4 class="center">Aviso</h4>
        <div class="container flow-text center" id="messageContent"></div>
        <button class="btn-flat modal-close right white-text" style="margin: 1em 0 2em 0">Fechar</button>
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
