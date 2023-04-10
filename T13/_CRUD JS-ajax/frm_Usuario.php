
<form id="Uvalidacao" action="" class="form-control" method="POST" onsubmit="return false">
    <div class="row">
        <div class="col-sm-12">
            <h1 text-align="">Formulário de Cadastro de Usuários</h1>
        </div>
    </div>
    <hr>
    <div class="row"><!--bloco id e data de cadastro-->
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
        </div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data de Cadastro">
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--bloco NOME , NASC., CPF, GENERO-->
        <div class="col-sm-3">
            <label for="Nome">Nome*</label>
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo" oninput="nomeValidacao()">
            <span class="span-required">Preencha o campo nome</span>
        </div>
        <div class="col-sm-3">
        <label for="Nome">Data Nascimento*</label>
            <input type="date" class="form-control" name="txtDataNasc" id="txtDataNasc" placeholder="Data Nascimento"oninput="dataValidacao()">
            <span class="span-required">Preencha o campo data</span>
        </div>
        <div class="col-sm-3">
        <label for="Nome">CPF*</label>
            <input type="tel" class="form-control" name="txtCpf" id="txtCpf" placeholder="Informe seu CPF"oninput="cpfValidacao()">
            <span class="span-required">Preencha o campo Cpf</span>
        </div>
        <div class="col-sm-3">
        <label for="Nome">Gênero*</label>
            <select name="txtGenero" id="txtGenero" class="form-control" oninput="generoValidacao()">
                <option value="">-- Selecione seu Gênero --</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <span class="span-required">selecione o campo gênero</span>
        </div>
    </div>
    <div class="row mt-1"><!--bloco  email tel1 tel 2-->
        <div class="col-sm-4">
        <label for="Nome">E-mail*</label>
            <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Insira seu Email"oninput="emailValidacao()">
            <span class="span-required">insira um email valido</span>
        </div>
        <div class="col-sm-4">
        <label for="Nome">Telefone*</label>
            <input type="tel" class="form-control" name="txtTelefone1" id="txtTelefone1" placeholder="Insira um telefone"oninput="telefone1Validacao()">
            <span class="span-required">Preencha o campo telefone 1</span>
        </div>
        <div class="col-sm-4">
        <label for="Nome">Telefone2</label>
            <input type="tel" class="form-control" name="txtTelefone2" id="txtTelefone2" placeholder="Insira um telefone 2"oninput="telefone2Validacao()">
            <span class="span-required">Preencha o campo telefone 1</span>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGRADOURO, CIDADE , estado(UF) , CEP-->
        <div class="col-sm-3">
        <label for="Nome">Logradouro*</label>
            <input type="text" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Ex: Rua Luiz Faccini, 132."oninput="logradouroValidacao()">
            <span class="span-required">Preencha o campo logradouro</span>
        </div>
        <div class="col-sm-2">
        <label for="Nome">Cep*</label>
            <input type="tel" class="form-control" name="txtCep" id="txtCep" placeholder="Informe seu Cep"oninput="cepValidacao()">
            <span class="span-required">Preencha o campo Cep</span>
        </div>
        <div class="col-sm-3">
        <label for="Nome">Cidade*</label>
            <input type="text" class="form-control" name="txtCidade" id="txtCidade" placeholder="Inform sua Cidade"oninput="cidadeValidacao()">
            <span class="span-required">Preencha o campo cidade</span>
        </div>
        <div class="col-sm-2">
        <label for="Nome">UF*</label>
            <select name="txtUF" id="txtUF" class="form-control" oninput="ufValidacao()">
                <option value=""> --Selecione--</option>
                <option value="Acre">AC</option>
                <option value="Alagoas">AL</option>
                <option value="Amapá">AP</option>
                <option value="Amazonas">AM</option>
                <option value="Bahia">BA</option>18
                <option value="Ceará">CE</option>17
                <option value="Minas gerais">DF</option>
                <option value="Espírito Santo">ES</option>16
                <option value="Goiás">GO</option>15
                <option value="Maranhão">MA</option>14
                <option value="Mato Grosso">MT</option>15
                <option value="Minas gerais">MG</option>13
                <option value="Pará">PA</option>12
                <option value="Paraíba">PB</option>8
                <option value="Paraná">PR</option> 9
                <option value="Pernambuco">PE</option>10
                <option value="Piauí">PI</option>11
                <option value="Rio de Janeiro">RJ</option>7
                <option value="Rio Grande do Norte">RN</option>6
                <option value="Rio Grande do Sul">RS</option>7
                <option value="Rondônia">RO</option>1
                <option value="Minas gerais">RR</option>
                <option value="Santa Catarina">SC</option>5
                <option value="São Paulo">SP</option>2
                <option value="Sergipe">SE</option>4
                <option value="Tocantins">TO</option>3
            </select>
            <span class="span-required">selecione o campo uf</span>
        </div>
        <div class="col-sm-2">
        <label for="Nome">Status*</label>
            <select name="txtStatus" id="txtStatus" class="form-control"oninput="statusValidadao()">
                <option value="" selected> --Selecione--</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
            <span class="span-required">selecione o status</span>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!--LOGIN , SENHA , CONFIRMAR SENHA  -->
        <div class="col-sm-4">
        <label for="Nome">Login*</label>
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário"oninput="loginValidacao()">
            <span class="span-required">Preencha o campo login</span>
        </div>
        <div class="col-sm-4">
        <label for="Nome">Senha*</label>
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha"oninput="senhaValidacao()">
            <span class="span-required">Preencha o campo senha</span>
        </div>
        <div class="col-sm-4">
        <label for="Nome">Confirmar Senha*</label>
            <input type="password" class="form-control" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirme a senha"oninput="confirmarsenhaValidacao()">
            <span class="span-required">Preencha o campo confirmar senha</span>
        </div>
    </div>
    <!-- SEPARAR-->
    <div class="row mt-1"><!-- Observação -->
        <div class="col-sm-12">
        <label for="Nome">Observação</label>
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4"><!--botoes-->
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-dark" onclick="UsuarioPesquisar()">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-dark" onclick= "fe()">Cadastrar</button>
            <button type="submit" name="btoAlterar" class="btn btn-dark" onclick="UsuarioAlterar()">Alterar</button>
            <a type="reset" name="btoLimpar" class="btn btn-dark">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" onclick="UsuarioExcluir()">Excluir</button>
            <button name="btotabela" class="btn btn-dark" onclick="abrirtabela()">Tabela</button>
        </div>
    </div>
    <div class="row"> 
        <div class="col-sm-12" id="resultado"></div>
    </div>

    </div>
</div>
</form>
<script>

const Uvalidacao = document.getElementById('Uvalidacao');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;

Uvalidacao.addEventListener('submit',(event)=>{
    event.preventDefault();
    
    nomeValidade();
    dataValidade();
    cpfValidade();
    generoValidade();
    emailValidade();
    telefone1Validade();
    telefoe2Validade();
    logradouroValidade();
    cepValidade();
    cidadeValidade();
    ufValidade();
    statusValidade();
    loginValidade();
    senhaValidade();
    confirmarsenhaValidade();
});
function setError(Uvalidacao){
    campos(Uvalidacao).style.border = '2px solid red';
    spans(Uvalidacao).style.display = 'block';
}
function removeEroor(Uvalidacao){
    campos(Uvalidacao).style.border = '';
    spans(Uvalidacao).style.display = 'none';
}
function nomeValidade(){
    if(campos[2].ariaValueMax.length < 30)
    {
        setError(2);
        //console.log('NOME DEVE CONTER 10 CARACTERES')
    }
    else
    {
        removeEroor(2);
        //console.log('NOME VALIDADO');
    }
}
function dataValidade(){
    if(campos[3].ariaValueMax.length < 20)
    {
        setError(3);
    }
    else
    {
        removeEroor(3);
    }
}
function cpfValidade(){
    if(campos[4].ariaValueMax.length < 11)
    {
        setError(4);
    }
    else
    {
        removeEroor(4);
    }
}
function generoValidade(){
    if(campos[5].ariaValueMax.length < 10)
    {
        setError(5);
    }
    else
    {
        removeEroor(5);
    }
}
function emailValidade(){
 if(emailRegex.test(campos[1].value))
        {
            setError(1);
            //console.log('Email validado');
        }
        else
        {
            removeEroor(1);
            //console.log('Email não validado');
        }
}
function telefone1Validade(){
    if(campos[7].ariaValueMax.length < 11)
    {
        setError(7);
    }
    else
    {
        removeEroor(7);
    }
}
function telefone2Validade(){
    if(campos[8].ariaValueMax.length < 11)
    {
        setError(8);
    }
    else
    {
        removeEroor(8);
    }
}
function logradouroValidade(){
    if(campos[9].ariaValueMax.length < 50)
    {
        setError(9);
    }
    else
    {
        removeEroor(9);
    }
}
function cepValidade(){
    if(campos[10].ariaValueMax.length < 8)
    {
        setError(10);
    }
    else
    {
        removeEroor(10);
    }
}
function cidadeValidade(){
    if(campos[11].ariaValueMax.length < 25)
    {
        setError(11);
    }
    else
    {
        removeEroor(11);
    }
}
function ufValidade(){
    if(campos[12].ariaValueMax.length < 2)
    {
        setError(12);
    }
    else
    {
        removeEroor(12);
    }
}
function statusValidade(){
    if(campos[13].ariaValueMax.length < 7)
    {
        setError(13);
    }
    else
    {
        removeEroor(13);
    }
}
function loginValidade(){
    if(campos[14].ariaValueMax.length < 15)
    {
        setError(14);
        //console.log('LOGIN DEVE CONTER 10 CARACTERES')
    }
    else
    {
        removeEroor(14);
        //console.log('LOGIN VALIDADO');
    }
}
function senhaValidade(){
        if(campos[15].value.length < 8)
        {
            setError(15);
        }
        else {
            removeEroor(15);
            confirmarsenhaValiade();
        }
}
function confirmarsenhaValiade(){
        if(campos[15].value == campos[16].value && campos[16].value.length >= 3)
        {
            removeEroor(16);
        }
        else
        {
            setError(16);
        }
}
</script>