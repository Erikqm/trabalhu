<?php
	function insert($x, $y, $z) {
		$con = mysql_connect("localhost", "admin", "admin") or die("Erro de Conexão");
		mysql_select_db("albertogatinha");
		$sql = "insert into $x ($y) values ($z)";
		mysql_query($sql);
		mysql_close($con);
	}
?>