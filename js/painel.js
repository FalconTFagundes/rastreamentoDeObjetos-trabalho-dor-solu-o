/* INÍCIO FUNCTION BTN LOGIN */
$(document).ready(function () {
    $("#frmLogin").submit(function (event) {
        event.preventDefault();

        var acaoPage = "logar";
        var formdata = $(this).serializeArray();

        formdata.push({ name: "acao", value: acaoPage });

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: formdata,
            beforeSend: function () {
                let timerInterval
                Swal.fire({
                  title: 'Aguarde a Validação!',
                  html: 'Verificando..',
                  timer: 2000,
                  timerProgressBar: false,
                  didOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                      b.textContent = Swal.getTimerLeft()
                    }, 100)
                  },
                })
                /* mensagem de aguarde */

            },
            success: function (data) {
                /* function de tempo de verificação - por causa da msg de aguarde */
                setTimeout(() => {
                    if (data != 'Vazio') { /* se não for vazio */
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Redirecionando..',
                            showConfirmButton: false,
                            timer: 2000
                        });
                        setTimeout(() => {
                            window.location.href = "painel/controleSetor.php"; /* redirecionando para a página de adm */
                        }, "1000");

                    } else { /* se for vazio */
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Usuario Não Encontrado!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                }, "350"); /* tempo da function de verificação - por causa da msg de aguarde */


            }
        });
    });
});
/* FIM BTN LOGIN */


/* FUNÇÃO DE ALERTA DE MENSAGEM */
function msgGeral(mensagem, timer) {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: mensagem,
        showConfirmButton: false,
        timer: timer
    })
}
/* FINAL FUNÇÃO DE ALERTA DE MENSAGEM */



/* function loginVerify(formId, pageAcao) {
    $('#' + formId).on('submit', function (k) {
        k.preventDefault();

        var formdata = $(this).serializeArray();
        formdata.push(
            { name: "acao", value: pageAcao },
        );

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: formdata,
            beforeSend: function (retorno) {
                Swal.fire({
                    icon: 'info',
                    title: 'Verificando...',
                    text: 'Aguarde sua verificação',
                    footer: 'Não irá demorar muito!'
                })

            }, success: function (retorno) {
                console.log(retorno);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Salvo com Sucesso',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        });
    })
} */







/* 
function atualizarPagina(dataMenu) {
    var dados = {
        acao: dataMenu
    }
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {

        }, success: function (e) {

            $('div#conteudo').html(e);
        }
    })
} */