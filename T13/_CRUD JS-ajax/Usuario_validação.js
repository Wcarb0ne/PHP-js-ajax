//codigo teste pra validação

$('#frm_Usuario.php').validate({
    errorLabelContainer: ".containerError",
    wrapper: "li",
    rules:
    {
        txtNome: {
            required: true
        },
        txtdataNasc: {
            required: true
        },
        txtCpf: {
            required: true
        },
    },
    messages:{
        txtNome:{
            required: "O campo nome é Obrigatório"
        },
        txtdataNasc: {
            required: "O campo nome é Obrigatório"
        },
        txtCpf: {
            required: "O campo nome é Obrigatório"
        }
    }
});

//formulario exemplo pra validação

//Perceba que os campos com * (asterisco) são obrigatório e você deve usar a lógica para escolher
//os campos que você deve ou não validar. Por exemplo, o campo Ativo é obrigatório mas pelo fato de
//ser um checkbox não tem como o usuário não preencher, pois ou ele está marcado ou não está, sendo
//assim qual a finalidade de verificar se este campo está preenchido ? Nenhuma. Outro exemplo é o 
//campo Perfil, pelo fato de ser um combobox e sempre vai ter algum item selecionado, não tem como
//o usuário não selecionar um item, pois sempre haverá um item selecionado mesmo que ele nem mexa 
//neste campo.

//https://www.devmedia.com.br/validacao-de-dados-em-php-com-jquery-validate/28544