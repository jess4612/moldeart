<?php include PATH_MODALS . '/confirmaEdicao.php'; ?>

<main class="row container">
    <style type="text/css">

        form .input-field label {
            color: black;
        }

        @media only screen and (min-width: 1024px) {
            #img_btn {
                margin-top: 5em;
            }

            #alterarFoto img {
                margin-top: 6em;
            }
            span.alterarImagem {
                margin-top: 6em;
            }
        }

        span.alterarImagem {
            position: absolute;
            width: 100%;
            text-align: center;
            left: 0;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 0 0 0.5em 0.5em;
            transition-duration: 0.5s;
            display: none;
        }

        #alterarFoto:hover span.alterarImagem {
            display: inline-block;
            transition-duration: 1s;
        }

        #alterarFoto img {
            width: 100%;
            cursor: pointer;
            max-height: 200px;
            border: 0.3em #8b4513 solid;
        }
    </style>
    <section class="row container" style="background-color: rgb(222, 184, 135); margin: auto; margin-top: 0.5em; margin-bottom: 1em" title="Editar Perfil">
        <form class="row" name="editar_perfil" method="POST" action="<?=INDEX?>/alterar_conta" id="formEditarPerfil" enctype="multipart/form-data" style="margin: 0">
            <div class="col l8" style="margin-bottom: 1em; margin-left: 0em;">
                <div class="row container" style="margin: auto;">
                    <h5 class="center"><i>Meus dados</i></h5>

                    <div class="input-field col s12">
                        <input type='text' name='nome' class='validate' value="<?=$_SESSION['userdata']->getNome()?>">
                        <label style='font-size: 1.2em;'>Nome</label><br>
                    </div>

                    <div class="input-field col s12">
                        <input type="text" name='sobrenome' class='validate' value="<?=$_SESSION['userdata']->getSobrenome()?>">
                        <label style='font-size: 1.2em;'>Sobrenome</label><br>
                    </div>

                    <div class="input-field col s12" >
                        <input type="email" name="email" class="validate" value="<?=$_SESSION['userdata']->getEmail()?>">
                        <label style='font-size: 1.2em;'>E-mail</label><br>
                    </div>

                    <div class='input-field col s12'>
                        <label style=' font-size: 1.3em;'>Senha:</label>
                        <!-- color: #FFF59D; -->
                        <input type='password' name='senha' class='validate'>
                        <span style="font-size: 0.8em">Obs: Digitar sua senha aqui irá alterá-la</span>
                    </div>

                    <div class='input-field col s12'>
                        <label style=' font-size: 1.3em;'>Confirma Senha:</label>
                        <input type='password' name='confirmaSenha' class='validate'>
                    </div>
                </div>
            </div>
            <div class="col l4" id="img_btn">
                <div class="input-field col s10" title="Alterar Foto" id="alterarFoto">
                    <input type="file" name="img" id="img" class="hide" accept="image/jpeg, image/jpg, image/png">
                    <img src="<?=URL_VIEWS?>/_upload/<?=$_SESSION['userdata']->getImage()?>" class="responsive-img" onclick="document.getElementById('img').click()" id="img_demo">
                    <span class="alterarImagem">Alterar imagem</span>
                </div>
            </div>
            <a class="btn col s10 push-s1 l5 push-l4 modal-trigger" style="background: rgba(139,69,19,0.7); margin-bottom: 2em" href="#confirmaEdicao">
                Editar
            </a>
        </form>
    </section>
</main>	
