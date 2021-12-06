<?php
// inclui o arquivo de configuração do sistema e está alocado na pasta de configuração geral do sistema
include “Config/config_sistema.php”;

// recebe dados do formulario
$tratamento = isset($_POST[‘tratamento’]);
$sexo = isset($_POST[‘sexo’]);
$nome = htmlspecialchars($_POST[‘nome’]);
$sobrenome = htmlspecialchars($_POST[‘sobrenome’]);
$email = htmlspecialchars($_POST[‘email’]);
$cnh = htmlspecialchars($_POST[‘cnh’]);
$validade = isset ($_POST[‘validade’]);
$logradouro = htmlspecialchars($_POST[‘logradouro’]);
$complemento = htmlspecialchars($_POST[‘complemento’]);
$bairro = isset($_POST[‘bairro’]);
$cidade = $_POST[‘cidade’];
$UF = isset($_POST[‘UF’]);
$cep = $_POST[‘cep’];
$Data_Nascimento = isset($_POST[‘Data_Nascimento’]);
$telefone = $_POST[‘telefone’];
$celular = $_POST[‘celular’];
$nacionalidade = htmlspecialchars($_POST[‘nacionalidade’]);
$dia = $_POST[‘dia’];
$mes = $_POST[‘mes’];
$ano = $_POST[‘ano’];
$login = htmlspecialchars($_POST[‘login’]);
$senha = htmlspecialchars($_POST[‘senha’]);
$confirma = isset($_POST[‘confirma’]);
$pergunta = isset($_POST[‘pergunta’]);
$resposta = isset($_POST[‘resposta’]);

// htmlspecialchars serve para que o sistema aceite caracter especial tipo senha = $abc@

// repetidor incrementado valida os dados
foreach ( $_POST as $key => $value )
{
if ( empty( $value ) )
{
echo “$key: campo obrigatorio<br>”;
}
}
// caso ok faz consulta no banco para inserir os dados do usuario

$sql = “INSERT INTO TAB_Clientes (tratamento,genero,nome,sobrenome,email,cnh,validade,logradouro,complemento,bairro,cidade,UF,cep,Data_Nascimento,
telefone,celular,nacionalidade,login,senha,confirma,pergunta,resposta) VALUES (‘$tratamento’,’$sexo’,’$nome’,’$sobrenome’,’$email’,’$cnh’,’$validade’,’$logradouro’,’$complemento’,’$bairro’,
‘$cidade’,’$UF’,’$cep’,’$Data_Nascimento’,’$telefone’,’$celular’,’$nacionalidade’,’$login’,’$senha’,’$confirma’,’$pergunta’,’$resposta’)”;
$consulta = mysql_query($sql);

// verifica se o usuario foi cadastrado
if($consulta) {
echo “<font color=green><b>
Você foi cadastrado com sucesso!<br>
Click <a href=index.php>aqui</a efetuar o login.
</font></b>”;
exit;
} else {
echo “Não foi possivel efetuar o seu cadastro<br>
tente mais tarde pode ser um problema no servidor!<br>
Click <a href=index.php>aqui</a ir ate a home page do sistema.”;
exit;
}
?>
