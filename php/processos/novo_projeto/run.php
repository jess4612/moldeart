<?php
use \Classes\Artefato;

/* Cadastra novo projeto no banco de dados */
$artefato = new Artefato();

$artefato->setNome($_POST['nome']);
$artefato->setCategoria($_POST['categoria']);
$artefato->setDescricao($_POST['descricao']);
$artefato->setTags($_POST['tags']);
$artefato->setImage($_FILES['img_proj']);

$msg = $artefato->iniciarCadastro();

if ($msg == 'OK') {

    echo $artefato->forms();
    // echo '<h4 class="flow-text">Novo Passo</h4>
    //     <form class="row" id="novoPasso" action="' . INDEX . '/novo_projeto/novo_passo" method="post">
    //         <div class="input-field col s12 l8">
    //             <textarea class="materialize-textarea" name="descPasso" id="descPasso" style="min-height: 125px" required></textarea>
    //             <label>Descrição</label>
    //         </div>
    //         <div class="col l4" id="img_btn">
    //             <figure class="input-field col s10 push-s1" style="margin: 0 !important" onclick="document.getElementById(\'imgNew\').click()">
    //                 <input type="file" name="img_passo" id="imgNew" class="hide img" onchange="changeDemo(\'img_demo0\', this)" accept="image/jpeg, image/jpg, image/png" required>
    //                 <img src="'.URL_IMG.'/background/florBg.jpg" class="responsive-img" id="img_demo0">
    //                 <figcaption class="molde-brown">Capa do projeto</figcaption>
    //             </figure>
    //         </div>
    //     </form>';


    $_SESSION['artefato'] = $artefato;
} else {
    echo $msg;
}
