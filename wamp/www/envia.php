<?php
	$user = "'".$_POST['user']."'";
	$dtnow = "'".date('Y-m-d h:i:s')."'";
	$sex = "'".$_POST['sex']."'";
	$name = "'".$_POST['name']."'";
	$email1 = "'".$_POST['email1']."'";
	$cpf = "'".$_POST['cpf']."'";
	$rg = "'".$_POST['rg']."'";
	$tel1 = "'".$_POST['tel1']."'";
	$tel2 = "'".$_POST['tel2']."'" or $tel2 = "NULL";
	$tel3 = "'".$_POST['tel3']."'" or $tel3 = "NULL";
	$date = "'".$_POST['date']."'";
	$cep = "'".$_POST['cep']."'";
	$end = "'".$_POST['end']."'";
	$cid = "'".$_POST['cid']."'";
	$estado = "'".$_POST['estado']."'";
	$senha = "'".$_POST['senha']."'";
	$pais = "'".$_POST['pais']."'";
	$refere = "'".$_POST['num']."'";
	$refere .= "'".$_POST['comp']."'";
	$con = mysql_connect("localhost","admin","admin") or die("Erro de Conexão");
	mysql_select_db("albertogatinha");
	$sql = "insert into usuari values (NULL, ".$user.", ".$senha.", ".$name.",".$cep.",".$estado.",".$cid.",".$pais.",".$end.",".$email1.",".$sex.",".$tel1.",".$tel2.",".$tel3.",".$cpf.",".$refere.",".$dtnow.",".$date.",".$rg.")";
	mysql_query($sql);
	mysql_close($con);
	header("location:ok.php");
?>
