<?
ob_start();
//CONECTA COM O BANCO DE DADOS 
require_once("conecta.php");
//RECEBE OS DADOS DO FORMUL�RIO 
$usuario = $_POST[txtUser]; 
$senha = $_POST[txtSenha];
//VERIFICA 
$sql = mysql_query(" 
SELECT * FROM tb_usuarios WHERE USUARIO = ''$usuario'' AND SENHA = ''$senha''") or die("ERRO NO COMANDO SQL");
//LINHAS AFETADAS PELA CONSULTA 
$row = mysql_num_rows($sql);
//VERIFICA SE RETORNOU ALGO 
if($row == 0) echo "Usu�rio/Senha inv�lidos";
else {
//PEGA OS DADOS 
$id = mysql_result($sql, 0, "ID_USUARIO"); 
$usuario = mysql_result($sql, 0, "USUARIO");
$nome = mysql_result($sql, 0, "NOME_USUARIO");
$level_usuario = mysql_result($sql, 0, "LEVEL");
//INICIALIZA A SESS�O 
session_start();
//GRAVA AS VARI�VEIS NA SESS�O 
$_SESSION[id] = $id;
$_SESSION[usuario] = $usuario;
$_SESSION[nome] = $nome;
$_SESSION[level_usuario] = $level_usuario; 
//REDIRECIONA PARA A P�GINA QUE VAI EXIBIR OS PRODUTOS 
Header("Location: restrito.php"); 
}; //FECHA ELSE 
?>


Leia mais: http://www.babooforum.com.br/forum/index.php?/topic/516886-validacao-de-usuario-usando-php-e-mysql/#ixzz2YON6RROC