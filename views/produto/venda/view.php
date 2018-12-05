<?php if(!defined('RAIZ')) exit(); ?>

<section class="row container" title="Cadastrar projeto" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
    <form class="row" name="cadastrar_perfil" method="POST" action="<?=INDEX?>/novo_produto" id="" enctype="multipart/form-data" style="margin: 0">
        <div class="col s10 l8" style="margin-bottom: 1em; margin-left: 0em;">
            <div class="row container" style="margin: auto;">
                <h5 class="">Vender Produto</h5>

                <div class="input-field col s12">
                    <input type='text' name='nome' class='validate' value="" required style="border-color: rgb(139,69,19)">
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Nome:</label><br>
                </div>

                <div class="input-field col s12">
                    <input type="text" name='descricao' class='validate' value="" required style="border-color: rgb(139,69,19)">
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Descrição do produto:</label><br>
                </div>

                <div class="input-field col s12" >
                    <textarea name="preco" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea>
                    <label style="color: rgb(139,69,19);">Preço:</label> 
                </div>

                <div class="input-field col s12">
                    <input type="number" name='quantidade' class='validate' value="" required style="border-color: rgb(139,69,19)">
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Quantidade:</label><br>
                </div>

                <div class="input-field col s12" >
                    <input type="text" name="tags">
                    <!--  <textarea name="tags" class="materialize-textarea" class="validate" required style="border-color: rgb(139,69,19)"></textarea> -->
                    <label style="color: rgb(139,69,19);">Tags:</label> 
                </div>

                <div class="input-field col s12">
                    <input type="text" name="projeto">
                    <label>Código como projeto</label>
                    <span class="helper-text">Caso o produto não seja um projeto, deixe em branco</span>
                </div>

                
                <div class="col s15 l4" id="img_btn">
                    <div class="input-field col s10" title="Fotos do Projeto" id="">
                        <input type="file" name="img_proj" id="img" class="hide" accept="image/jpeg, image/jpg, image/png">
                        <img src="<?=URL_IMG?>/categorias/moda.png" class="responsive-img" onclick="document.getElementById('img').click()" id="img_demo">
                        <label>Fotos do projeto:</label>
                    </div>
                </div>


                <button class="btn col s6 modal-trigger" style="background: rgba(139,69,19,0.7); margin-bottom: 2em" href="">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
</section>
