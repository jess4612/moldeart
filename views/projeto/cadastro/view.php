<?php if(!defined('RAIZ')) exit(); ?>

<section class="row container" title="Cadastrar projeto" style="background-color: rgb(222, 184, 135); margin-top: 0.5em; padding: 1em 2em">
    <form class="row " name="cadastrar_perfil" method="POST" action="" id="" enctype="multipart/form-data" style="margin: 0">
        <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
            <div class="row container" style="margin: auto;">
                <h5 class=""><i>Cadastrar Projeto</i></h5>

                <div class="input-field col s12">
                    <input type='text' name='nome' class='validate' value="" required>
                    <label style='font-size: 1.2em; color: rgb(139,69,19);'>Nome:</label><br>
                </div>

                <div class="input-field col s12">
                <select>
                        <option disabled="">Categoria</option>
                        <option>Decoração</option>
                        <option>Jardinagem</option>
                        <option>Customização</option>
                        <option>Presentes</option>
                    <select>
                </div>

                        <div class="input-field col s12" >
                            <textarea name="descricao" class="materialize-textarea" class="validate" required></textarea>
                            <label style="color: rgb(139,69,19);">Descrição:</label> 
                        </div>

                        <div class="input-field col s12" >
                            <textarea name="tags" class="materialize-textarea" class="validate" required></textarea>
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
