<style type="text/css">
    figure figcaption {
        line-height: 2.3em;
        text-align: center;
        color: white;
    }
    figure {
        cursor: pointer;
        height: 135px;
        text-align: center;
    }
    main {
        background: rgb(222,184,135);
        margin-top: 1em !important;
        padding: 1em;
    }
</style>
<main class="row container">
    <form action="<?=INDEX?>/post_social" method="post" enctype="multipart/form-data">
        <div class="input-field col s12">
            <input type="text" id="titulo" name="titulo" class="validate" required>
            <label for="titulo">Título</label>
        </div>
        <div class="input-field col s12 l8">
            <textarea name="texto" class="materialize-textarea validate" id="texto" required></textarea>
            <label for="texto">Texto</label>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img').click()">
                <input type="file" name="capa" id="img" class="hide img" target-demo="img_demo" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo">
                <figcaption class="molde-brown">Capa do post</figcaption>
            </figure>
        </div>
        <h5>Imagens</h5>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img1').click()">
                <input type="file" name="img1" id="img1" class="hide img" target-demo="img_demo1" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo1">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img2').click()">
                <input type="file" name="img2" id="img2" class="hide img" target-demo="img_demo2" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo2">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img3').click()">
                <input type="file" name="img3" id="img3" class="hide img" target-demo="img_demo3" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo3">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img4').click()">
                <input type="file" name="img4" id="img4" class="hide img" target-demo="img_demo4" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo4">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img5').click()">
                <input type="file" name="img5" id="img5" class="hide img" target-demo="img_demo5" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo5">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img6').click()">
                <input type="file" name="img6" id="img6" class="hide img" target-demo="img_demo6" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo6">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img7').click()">
                <input type="file" name="img7" id="img7" class="hide img" target-demo="img_demo7" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo7">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img8').click()">
                <input type="file" name="img8" id="img8" class="hide img" target-demo="img_demo8" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo8">
            </figure>
        </div>
        <div class="col s12 l4" id="img_btn">
            <figure class="input-field col s10" title="Capa do projeto" onclick="document.getElementById('img9').click()">
                <input type="file" name="img9" id="img9" class="hide img" target-demo="img_demo9" accept="image/jpeg, image/jpg, image/png">
                <img src="<?=URL_IMG?>/background/florBg.jpg" class="responsive-img" id="img_demo9">
            </figure>
        </div>

        <button type="submit" class="btn molde-brown right">
            Salvar
        </button>
    </form>
</main>
