

function novoRelato() {

    let titulo = $("#titulo").val()
    let conteudo = $("#conteudo").val()
    let tipo = $("#categoria").val()


    if (!titulo) {
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: 'O campo titulo é obrigátorio'
            , footer: 'Qualquer dúvida entre em contato com o Suporte'
        });
        return;
    }
    if (!conteudo) {
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: 'O campo conteudo é obrigátorio'
            , footer: 'Qualquer dúvida entre em contato com o Suporte'
        });
        return;
    }
    if (tipo === "0") {
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: 'Selecione uma das categorias para continuarmos'
            , footer: 'Qualquer dúvida entre em contato com o Suporte'
        });
        return;
    }


    let data = JSON.stringify({
       titulo:titulo
        ,conteudo:conteudo
        ,tipo:tipo

    })
    $('#btnSalvar').addClass("disabled");
    $("#btnSalvar").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
    $.ajax({
        type: 'POST'
        , url: '/relatos/salvar'
        , data: data,
        success: function (data) {
            var retorno = $.parseJSON(JSON.stringify(data));

            if (retorno['sucesso'] === false) {
                let mensagem = retorno['message'] + '</br>';
                if (retorno['erro']) {
                    var erros = $.parseJSON(JSON.stringify(retorno['erro']));
                    for (erro in erros) {
                        mensagem = mensagem + erros[erro] + '</br>';
                    }
                }
                Swal.fire({
                    icon: 'error'
                    , title: 'Oops...'
                    , html: mensagem
                    , footer: 'Qualquer dúvida entre em contato com o Suporte'
                });
                return;
            } else if (retorno['sucesso'] == true) {
                Swal.fire({
                    position: 'center'
                    , icon: 'success'
                    , title: 'Relato enviado com sucesso'
                    , footer: ''
                    , showConfirmButton: true
                    , onClose: () => {
                        $(location).attr('href', '/dashboard')
                    }
                })
            }
        }
        , error: function (XMLHttpRequest, textStatus, errorThrown) {
            // $('#btnSalvar').removeClass("disabled");
            // $("#btnSalvar").html('<i class="bx bx-plus"></i> Registrar Chamado');
        }
        , contentType: "application/json"
        , dataType: 'json'
    });


}

function verDados(id) {

  $("#titulo").val();
  $("#conteudo").val();
  $("#categoria").val();


    $.ajax({
        type: 'POST'
        , url: '/relatos/ver'
        , data: JSON.stringify({
            id: id
        }),
        success: function (data) {
            var retorno = $.parseJSON(JSON.stringify(data));
            if (retorno['sucesso'] == false) {
                let mensagem = retorno['message'] + '</br>';
                if (retorno['erro']) {
                    var erros = $.parseJSON(JSON.stringify(retorno['erro']));
                    for (erro in erros) {
                        mensagem = mensagem + erros[erro] + '</br>';
                    }
                }
                Swal.fire({
                    icon: 'error'
                    , title: 'Oops...'
                    , html: mensagem
                    , footer: 'Qualquer dúvida entre em contato com o Suporte'
                });
                return;
            }


            if (retorno['sucesso'] === true) {
                $('#titulo').val(retorno['relato']['titulo']);
                $('#conteudo').val(retorno['relato']['conteudo']);
                $('#categoria').val(retorno['relato']['tipo']).change();


                console.log();


                $("#tituloModal").html('<h3 class="block-title" style="color: white">Editar Relato</h3>');

                $("#btnSalvar").html('<i class=" bx bx-edit"></i> Editar Relato');
                $("#btnSalvar").attr("onclick", 'editarRelato(' + id + ')');
                jQuery('#modal-post').modal('show');
            }
        }
        , error: function (XMLHttpRequest, textStatus, errorThrown) {

            $('#btnSalvar').removeClass("disabled");
            $("#btnSalvar").html('<i class=" bx bx-edit"></i> Editar Chamdo');
        }
        , contentType: "application/json"
        , dataType: 'json'
    });


}
function editarRelato(id) {


    let titulo = $("#titulo").val()
    let conteudo = $("#conteudo").val()
    let tipo = $("#categoria").val()


    if (!titulo) {
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: 'O campo titulo é obrigátorio'
            , footer: 'Qualquer dúvida entre em contato com o Suporte'
        });
        return;
    }
    if (!conteudo) {
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: 'O campo conteudo é obrigátorio'
            , footer: 'Qualquer dúvida entre em contato com o Suporte'
        });
        return;
    }
    if (tipo === "0") {
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: 'Selecione uma das categorias para continuarmos'
            , footer: 'Qualquer dúvida entre em contato com o Suporte'
        });
        return;
    }


    let data = JSON.stringify({
        titulo:titulo
        ,conteudo:conteudo
        ,tipo:tipo
        ,id:id

    });
    $('#btnSalvar').addClass("disabled");
    $("#btnSalvar").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
    $.ajax({
        type: 'POST'
        , url: '/relatos/alterar'
        , data: data,
        success: function (data) {
            var retorno = $.parseJSON(JSON.stringify(data));
            $('#btnSalvar').removeClass("disabled");
            $("#btnSalvar").html('<i class="nav-main-link-icon fa fa-check"></i> Editar Relato');
            if (retorno['sucesso'] == false) {
                let mensagem = retorno['message'] + '</br>';
                if (retorno['erro']) {
                    var erros = $.parseJSON(JSON.stringify(retorno['erro']));
                    for (erro in erros) {
                        mensagem = mensagem + erros[erro] + '</br>';
                    }
                }
                Swal.fire({
                    icon: 'error'
                    , title: 'Oops...'
                    , html: mensagem
                    , footer: 'Qualquer dúvida entre em contato com o Suporte'
                });
                return;
            } else if (retorno['sucesso'] == true) {
                jQuery('#modal-novo-usuario').modal('hide');
                Swal.fire({
                    position: 'center'
                    , icon: 'success'
                    , title: 'Relato Alterado com sucesso'
                    , showConfirmButton: true
                    , onClose: () => {
                        location.reload();
                    }
                })
            }
        }
        , error: function (XMLHttpRequest, textStatus, errorThrown) {
            $('#btnSalvar').removeClass("disabled");
            $("#btnSalvar").html('<i class="nav-main-link-icon bx bx-check"></i> Alterado');
        }
        , contentType: "application/json"
        , dataType: 'json'
    });
}

function excluirRelato(id, titulo) {
    Swal.fire({
        title: 'Deseja realmente excluir o Relato ' + titulo + ' ?',
        footer: "",
        text: "Atenção! A exclusão deste usuário ira apagar todo o histórico do mesmo",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'delete',
                url: '/relatos/excluir/',
                data: JSON.stringify({
                    relato: id
                }),
                success: function (data) {
                    var retorno = $.parseJSON(JSON.stringify(data));
                    if (retorno['excluido'] == true) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Relato excluido com sucesso!',
                            footer: '',
                            showConfirmButton: true,
                            onClose: () => {
                                location.reload();
                            }
                        })
                    }
                },
                contentType: "application/json",
                dataType: 'json'
            });
        }
    });
}
