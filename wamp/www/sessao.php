<?php
include("select.php");
$x = $_POST ['lala'];
$y = $_POST['senh'];
if($x=="administrador"){
	if($y=="web2013"){
	 session_start();
	 $_SESSION["nome"] = $x;
	header("location:admin1.php");}}
	else{$array = @select("*","usuari","where loginu='$x'");
if($array==false){
	header("location:login2.php");}
else if($array[0]['senhau']==$y){
	 session_start();
	 $_SESSION["nome"] = $x;
	 header("location:minhaconta.php");}
     else{
     	header("location:login2.php");}}
?>

