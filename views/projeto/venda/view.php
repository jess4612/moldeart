<?php if(!defined('RAIZ')) exit(); ?>

<section class="row container" title="Cadastrar projeto" style="background-color: rgba(179,109,59,0.7); margin-top: 0.5em; padding: 1em 2em">
    <form class="row " name="cadastrar_perfil" method="POST" action="" id="" enctype="multipart/form-data" style="margin: 0">
        <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
            <div class="row container" style="margin: auto;">
                <h5 class="">Vender Produto</h5>

                <div class="input-field col s12">
                    <input type='text' name='nome' class='validate' value="" required style="border-color: rgb(139,69,19)">
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Nome:</label><br>
                </div>

                <div class="input-field col s12">
                    <input type="text" name='categoria' class='validate' value="" required style="border-color: rgb(139,69,19)">
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Categoria:</label><br>
                </div>

                <div class="input-field col s12" >
                    <textarea name="passo_a_passo" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea>
                    <label style="color: rgb(139,69,19);">Passo-a-passo:</label> 
                </div>

                <div class="input-field col s12" >
                    <input type="text" name="tags">
                   <!--  <textarea name="tags" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea> -->
                    <label style="color: rgb(139,69,19);">Tags:</label> 
                </div>

                <div class="col l4" id="img_btn">
                    <div class="input-field col s10" title="Fotos do Projeto" id="">
                        <input type="file" name="img_proj" id="img" class="hide" accept="image/jpeg, image/jpg, image/png">
                        <img src="" class="responsive-img" onclick="document.getElementById('img').click()" id="img_demo">
                        <label>Fotos do projeto:</label>
                    </div>
                </div>

                <a class="btn col s6 modal-trigger" style="background: rgba(139,69,19,0.7); margin-bottom: 2em" href="">
                    Cadastrar
                </a>
            </form>
        </section>
