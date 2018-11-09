<?php if (!defined('RAIZ')) exit(); ?>
<style type="text/css">
    main section {
        background: #deb887;
        margin-top: 1em;
    }

    #produto {
        background-color: rgb(222, 184, 135);
        margin-top: 0.5em;
        padding: 1em 2em;
        width: 101%;
        font-size: 1.4em;
    }
    p {
        text-align: justify;
    }
    #buttons {
        margin: 0;
    }
    .row.no-margin {
        margin: 0;
    }
    .divider {
        margin: 1em 0;
    }
</style>
<main class="row container">

    <section class="col s12">
        
        <div class="col s6">
            <div class="row no-margin">
                <h5>Produto</h5>
                <img class="responsive-img" src="<?=INDEX?>/views/_img/propagandas/presentes.png">
                <a class="btn-large molde-brown col s6">Aprenda a Fazer!</a>
            </div>
            <div class="divider molde-brown"></div>
            <div class="row no-margin">
                <div class="row no-margin">
                    <span class="col s8">Preço:</span>
                    <span class="col s4">R$100,00</span>
                </div>
                <div class="row no-margin">
                    <span class="col s8">Estoque:</span>
                    <span class="col s4">+8000</span>
                </div>
            </div>
            <div class="divider molde-brown"></div>
            <a class="btn-large molde-brown" style="margin-bottom: 1em">Contatar Anunciante</a>
        </div>
        
        <div class="col s6" style="margin-top: 3em">
            <div class="row">
                <strong class="col s8">Categoria</strong>
                <span class="col s4">NomeCategoria</span>
            </div>
            <div class="row">
                <strong class="col s8">Cadastrado em</strong>
                <span class="col s4">DD/MM/AAAA</span>
            </div>
            <div class="row">
                <strong class="col s12">Descrição</strong>
                <p class="col s12 right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pstrong>
            </div>
            <div class="row">
                <strong class="col s12">Tags</strong>
                <p class="col s12">Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing, elit, sed, do, eiusmod</p>
            </div>
            <div class="row">
                <strong class="col s9">Visualizações</strong>
                <span class="col s3 truncate" title="+8000">+8000</span>
            </div>
        </div>
    </section>


    <section class="col s12" style="margin-top: 1em;">
        <h5><em>Comentários</em></h5>
    </section>
</main>
