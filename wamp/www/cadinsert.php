<?php
	$array[0] = $_POST['name'];
	$array[1] = 0;
	$array[2] = $_POST['titulo'];
	$array[3] = $_POST['valor'];
	$teste = $_FILES['foto'];
	$array[5] = $_POST['disp'];
	$array[6] = $_POST['garant'];
	preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $teste["name"], $ext);   // Gera um nome único para a imagem
	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];   // Caminho de onde ficará a imagem
	$caminho_imagem = "img/" . $nome_imagem;   // Faz o upload da imagem para seu respectivo caminho
	move_uploaded_file($teste["tmp_name"], $caminho_imagem);
	$array[4] = $caminho_imagem;
	$array[7] = 1;
	$array[8] = $_POST['touch'];
	$array[9] = $_POST['format'];
	$array[10] = $_POST['displ'];
	$array[11] = $_POST['tec'];
	$array[12] = $_POST['wifi'];
	$array[13] = $_POST['bluetooth'];
	$array[14] = $_POST['cam'];
	$array[15] = $_POST['flash'];
	$array[16] = $_POST['frontal'];
	$array[17] = $_POST['filmadora'];
	$array[18] = $_POST['tv'];
	$array[19] = $_POST['radio'];
	$array[20] = $_POST['gps'];
	$array[21] = $_POST['nfc'];
	$array[22] = $_POST['proces'];
	$array[23] = $_POST['nucleo'];
	$array[24] = $_POST['band'];
	$array[25] = $_POST['edge'];
	$array[26] = $_POST['gprspr'];
	$array[27] = $_POST['wappro'];
	$array[28] = $_POST['mp3pro'];
	$array[29] = $_POST['cartme'];
	$array[30] = $_POST['soprod'];
	$array[31] = 0;	
	$sql = "insert into produt values(";
	for($x=0;$x<31;$x++)
		$sql .= "$array[$x],";
	$sql .= "$array[31],NULL)";
	echo $sql;
	$con = mysql_connect("localhost", "admin", "admin") or die("Erro de Conexão");
	mysql_select_db("albertogatinha");
	mysql_query($sql);
	mysql_close($con);
	
?>



























