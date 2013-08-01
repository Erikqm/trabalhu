<?php
	function delete($y="produt",$z="1=1") {
				$con = mysql_connect("localhost", "admin", "admin") or
				die("Erro de conexao");
				mysql_select_db("albertogatinha");
				$sql = "delete from $y $z";
				echo $sql;
				mysql_query($sql);
				mysql_close($con);}
?>