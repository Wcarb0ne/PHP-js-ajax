//BTO CADASTRAR
function fe(){

    //console.log('cornooooo');

    let nome_Usuario = $('#txtNome').val();
    let login_Usuario = $('#txtLogin').val();
    let senha_Usuario = $('#txtSenha').val();
    let confirmarSenha_Usuario = $('#txtConfirmarSenha').val();
    let email_Usuario = $('#txtEmail').val();
    let dataNasc_Usuario  = $('#txtDataNasc').val();
    let cpf_Usuario = $('#txtCpf').val();
    let genero_Usuario = $('#txtGenero').val();
    let telefone1_Usuario = $('#txtTelefone1').val();
    let telefone2_Usuario = $('#txtTelefone2').val();
    let logradouro_Usuario = $('#txtLogradouro').val();
    let cidade_Usuario = $('#txtCidade').val();
    let uf_Usuario = $('#txtUF').val();
    let cep_Usuario = $('#txtCep').val();
    let status_Usuario = $('#txtStatus').val();
    let obs_Usuario = $('#txtObs').val();

    let action = 'Usuario_btoCadastrar.php';

    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtNome: nome_Usuario,
            txtLogin: login_Usuario,
            txtSenha: senha_Usuario,
            txtConfirmarSenha: confirmarSenha_Usuario,
            txtEmail: email_Usuario,
            txtDataNasc: dataNasc_Usuario,
            txtCpf: cpf_Usuario,
            txtGenero: genero_Usuario,
            txtTelefone1: telefone1_Usuario,
            txtTelefone2: telefone2_Usuario,
            txtLogradouro: logradouro_Usuario,
            txtCidade: cidade_Usuario,
            txtUF: uf_Usuario,
            txtCep: cep_Usuario,
            txtStatus: status_Usuario,
            txtObs: obs_Usuario
        },
        success: function (data, status, xhr) {
            $("#resultado").empty().html(data);
            //$("#txtID").val($(#idGerado).text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })



}
//BTO PESQUISAR
function UsuarioPesquisar(){

    //console.log('testtetttt');

    let id_Usuario = $('#txtID').val();
  
    let action = 'Usuario_btoPesquisa.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Usuario
           
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html( data );
            $("#txtID").val($('#idGerado').text());
            $("#txtNome").val($('#PesquisaNome').text());
            $("#txtLogin").val($('#PesquisaLogin').text());
            $("#txtSenha").val($('#PesquisaSenha').text());
            $("#txtConfirmarSenha").val($('#PesquisaConfirmarSenha').text());
            $("#txtEmail").val($('#PesquisaEmail').text());
            $("#txtDataNasc").val($('#PesquisaDataNasc').text());
            $("#txtCpf").val($('#PesquisaCpf').text());
            $("#txtGenero").val($('#PesquisaGenero').text());
            $("#txtTelefone1").val($('#PesquisaTelefone1').text());
            $("#txtTelefone2").val($('#PesquisaTelefone2').text());
            $("#txtLogradouro").val($('#PesquisaLogradouro').text());
            $("#txtCidade").val($('#PesquisaCidade').text());
            $("#txtUF").val($('#PesquisaUF').text());
            $("#txtCep").val($('#PesquisaCep').text());
            $("#txtData").val($('#PesquisaCadastro').text());
            $("#txtStatus").val($('#PesquisaStatus').text()); //obs status nao esta puxando na caixa de txt no form
            $("#txtObs").val($('#PesquisaObs').text());
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error ' + errorMessage);
        }

    })

}
//BTO ALTERAR
function UsuarioAlterar(){

    //console.log('testtetttt');

    let id_Usuario = $('#txtID').val();
    let nome_Usuario = $('#txtNome').val();
    let login_Usuario = $('#txtLogin').val();
    let senha_Usuario = $('#txtSenha').val();
    let confirmarSenha_Usuario = $('#txtConfirmarSenha').val();
    let email_Usuario = $('#txtEmail').val();
    let dataNasc_Usuario  = $('#txtDataNasc').val();
    let cpf_Usuario = $('#txtCpf').val();
    let genero_Usuario = $('#txtGenero').val();
    let telefone1_Usuario = $('#txtTelefone1').val();
    let telefone2_Usuario = $('#txtTelefone2').val();
    let logradouro_Usuario = $('#txtLogradouro').val();
    let cidade_Usuario = $('#txtCidade').val();
    let uf_Usuario = $('#txtUF').val();
    let cep_Usuario = $('#txtCep').val();
    let status_Usuario = $('#txtStatus').val();
    let obs_Usuario = $('#txtObs').val();

  
    let action = 'Usuario_btoAlterar.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Usuario,
            txtNome: nome_Usuario,
            txtLogin: login_Usuario,
            txtSenha: senha_Usuario,
            txtConfirmarSenha: confirmarSenha_Usuario,
            txtEmail: email_Usuario,
            txtDataNasc: dataNasc_Usuario,
            txtCpf: cpf_Usuario,
            txtGenero: genero_Usuario,
            txtTelefone1: telefone1_Usuario,
            txtTelefone2: telefone2_Usuario,
            txtLogradouro: logradouro_Usuario,
            txtCidade: cidade_Usuario,
            txtUF: uf_Usuario,
            txtCep: cep_Usuario,
            txtStatus: status_Usuario,
            txtObs: obs_Usuario
           
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function (data, status, xhr) {

            $("#resultado").empty().html( data );
            UsuarioPesquisar();
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').append('Error ' + errorMessage);
        }

    })

}
// BTO EXCLUIR
function UsuarioExcluir(){

    //console.log('testtetttt');

    let id_Usuario = $('#txtID').val();
  
    let action = 'Usuario_btoExcluir.php';


    $.ajax({
        url: action,
        type: 'post',
        data: {
            txtID: id_Usuario
           
        },
        beforend : function(){
            $("#resultado").html("ENVIANDO...");
        },
        success: function(data, status, xhr){
            $( "#resultado" ).empty().html( data );
        },
        error: function (jqXhr, textStatus, errorMessage) {
            $('#resultado').empty().html('Error' + errorMessage);
        }

    })
}