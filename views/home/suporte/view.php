<?php if(!defined('RAIZ')) exit(); ?>
<style type="text/css">
.container .flow-text {
    text-align: justify;
}
</style>
<!-- background-color: rgba(179,109,59,0.7) -->
<main class="row container" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
    <section title="Quem somos" class="col s12 l7">
        <h5><i>Quem somos??</i></h5>
        <p class="flow-text">A Molde, é uma empresa voltada para a produção de produtos artesanais. Trabalha com a economia financeira e com materiais recicláveis – em sua maioria –, dando visão para a cultura artesanal de cada vertente dessa comunidade – como o artesanato oriental, africano, indígena, europeu. Com setores voltados à casa, decoração, roupas e presentes.</p>
    </section>

    <form method="post" action="" class="col s12 l4 right">
        <h5><i>Fale conosco</i></h5><br/>

        <div class="input-field">
            <input type="text" name="assunto" style="border-color: rgb(139,69,19);">
            <label style="color: rgb(139,69,19)">Assunto:</label>
        </div>
        <div class="input-field">
            <textarea name="message" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea>
            <label style="color: rgb(139,69,19);">Mensagem:</label> 
        </div>
        <button class="btn-large right" style="background: rgba(139,69,19,0.7);">
            Enviar
        </button>
    </form>
</main>
