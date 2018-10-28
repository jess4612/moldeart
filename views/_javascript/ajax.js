$(function () {
    var inSubmit = false;

    $('#formCadastrarProjeto').submit(function () {
        var loadIcon = document.getElementById('loading').innerHTML;
        var el = document.createElement('div');

        var obj = this;
        var form = $(obj);
        var submitBtnId = form.attr('btn-id');

        var dados = new FormData(obj);

        if (!inSubmit) {
            // Enviar dados
            $.ajax({
                beforeSend: function () {
                    inSubmit = true;
                    $('#formCadastrarProjeto').css('display', 'none');

                    el.setAttribute('class', 'center');
                    el.innerHTML = loadIcon;

                    $('#containerNovoProjeto').append(el);
                },

                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                cache: false,
                processData: false,
                contentType: false,

                success: function (data) {

                    if (data == 'OK') {
                        $('#novoPasso').css('display', 'block');
                        $('#buttons').css('display', 'block');
                    } else {
                        $('#messageContent').text(data);
                        $('#messageModal').modal('open');
                        $('#formCadastrarProjeto').css('display', 'block');
                    }
                    $(el).css('display', 'none');
                    inSubmit = false;
                },

                error: function (request, status, error) {
                    voltaSubmit('Cadastrar', submitBtnId);
                    alert(request.responseText + '. Contate o suporte.');
                }
            });

            return false;
        }
    });

    $('#addStep').click(function () {
        var loadIcon = document.getElementById('loading').innerHTML;
        var el = document.createElement('div');

        var obj = document.getElementById('novoPasso');
        var form = $(obj);

        $(this).attr('disabled', true);

        var dados = new FormData(obj);


        var desc = document.getElementById('descPasso').value.trim();
        var image = document.getElementById('imgNew').value;


        // Validacao do novo passo
        if (desc.length < 1 || image.length < 1) {
            $('#messageContent').text('Preencha os campos do novo passo!');
            $('#messageModal').modal('open');
            $(this).attr('disabled', false);
            return false;
        }

        if (!inSubmit) {
            // Enviar dados
            $.ajax({
                beforeSend: function () {
                    inSubmit = true;
                    $('#containerNovoProjeto').text('');

                    el.setAttribute('class', 'center');
                    el.innerHTML = loadIcon;

                    $('#containerNovoProjeto').append(el);
                },

                url: form.attr('action'),
                type: 'POST',
                data: dados,
                cache: false,
                processData: false,
                contentType: false,

                success: function (data) {
                    $(el).css('display', 'none');
                    $('#containerNovoProjeto').append(data);
                    $('#saveProject').css('display', 'block');
                    inSubmit = false;
                    // $('#messageContent').text(data);
                    // $('#messageModal').modal('open');
                },

                error: function (request, status, error) {
                    voltaSubmit('Cadastrar', submitBtnId);
                    alert(request.responseText + '. Contate o suporte.');
                }
            });

            $(this).attr('disabled', false);
            return false;
        }
        $(this).attr('disabled', false);
    });

    $('#editor').click(function () {
        var loadIcon = document.getElementById('loading').innerHTML;
        var el = document.createElement('div');

        var obj = document.getElementById($(this).attr('target'));
        var form = $(obj);

        $($(this).attr('owner')).attr('disabled', true);

        var dados = new FormData(obj);

        var text = $('#containerNovoProjeto').innerHTML;

        if (!inSubmit) {
            // Enviar dados
            $.ajax({
                beforeSend: function () {
                    inSubmit = true;

                    $('#containerNovoProjeto').text('');

                    el.setAttribute('class', 'center');
                    el.innerHTML = loadIcon;

                    $('#containerNovoProjeto').append(el);
                },

                url: form.attr('action'),
                type: 'POST',
                data: dados,
                cache: false,
                processData: false,
                contentType: false,

                success: function (data) {
                    $(el).css('display', 'none');
                    $('#containerNovoProjeto').append(data);
                    inSubmit = false;
                    // $('#messageContent').text(data);
                    // $('#messageModal').modal('open');
                },

                error: function (request, status, error) {
                    voltaSubmit('Cadastrar', submitBtnId);
                    alert(request.responseText + '. Contate o suporte.');
                }
            });

            $(this).attr('disabled', false);
            return false;
        }
        $(this).attr('disabled', false);
    });

    $('#saveProject').click(function () {
        var loadIcon = document.getElementById('loading').innerHTML;
        var el = document.createElement('div');

        var obj = this;
        var form = $(obj);

        var dados = new FormData(document.getElementById('novoPasso'));

        if (!inSubmit) {
            // Enviar dados
            $.ajax({
                beforeSend: function () {
                    inSubmit = true;
                    $('#containerNovoProjeto').text('');

                    el.setAttribute('class', 'center');
                    el.innerHTML = loadIcon;

                    $('#containerNovoProjeto').append(el);
                },

                url: form.attr('action'),
                data: dados,
                type: 'post',
                cache: false,
                processData: false,
                contentType: false,

                success: function (data) {
                    $(el).css('display', 'none');
                    window.location.href = data;
                    inSubmit = false;
                },

                error: function (request, status, error) {
                    voltaSubmit('Cadastrar', submitBtnId);
                    alert(request.responseText + '. Contate o suporte.');
                }
            });

            return false;
        }
    });
});
