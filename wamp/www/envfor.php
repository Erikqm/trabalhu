<?php
	$codfor = "NULL";
	$nomefo = $_POST['nomefo'];
	$titfor = $_POST['titfor'];
	$cepfor = $_POST['cepfor'];
	$endere = $_POST['endere'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$paisfo = $_POST['paisfo'];
	$respon = $_POST['respon'];
	$cnpjfo = $_POST['cnpjfo'];
	$emailf = $_POST['emailf'];
	$homepg = $_POST['homepg'];
	$insest = $_POST['insest'];
	$tel1fo = $_POST['tel1fo'];
	$tel2fo = $_POST['tel2fo'];
	$tel3fo = $_POST['tel3fo'];
	$dtcada = date('Y-m-d h:i:s');
	$con = mysql_connect("localhost","admin","admin") or die("Erro de Conexão");
	mysql_select_db("albertogatinha");
	$sql = "insert into fornec values (NULL,'".$nomefo."','".titfor."','".$cepfor."','".$endere."','".$cidade."','".$estado."','".$paisfo."','".$respon."','".$cnpjfo."','".$emailf."','".$homepg."','".$insest."','".$tel1fo."','".$tel2fo."','".$tel3fo."','".$dtcada."')";
	mysql_query($sql);
	mysql_close($con);
	header("location:admin1.php");
?>