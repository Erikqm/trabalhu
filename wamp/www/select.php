<?php
	function select($x="*",$y="produt",$z="1=1") {
				$con = mysql_connect("localhost", "admin", "admin") or
				die("Erro de conexao");
				mysql_select_db("albertogatinha");
				$sql = "select $x from $y $z";
				$consulta = mysql_query($sql);
				while ($row = mysql_fetch_array($consulta)) {
					$result[]=$row; }
				mysql_close($con);
				return $result; }
	
	function linhas($x="*",$y="produt",$z="1=1") {
		$con = mysql_connect("localhost", "admin", "admin") or
		die("Erro de conexao");
		mysql_select_db("albertogatinha");
		$sql = "select $x from $y $z";
		$result = mysql_query($sql, $con);
		$num_rows = mysql_num_rows($result);
		return $num_rows;
	}

?>