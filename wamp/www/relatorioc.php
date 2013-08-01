<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>

	<link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script>
	$(document).ready(function(){
				 	$("#data").datepicker({
						dateFormat: 'dd/mm/yy',
						dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
						dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
						dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
						monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
						monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
						nextText: 'Proximo',
						prevText: 'Anterior'
					});
			});
			
	$(document).ready(function(){
				 	$("#data_2").datepicker({
						dateFormat: 'dd/mm/yy',
						dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
						dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
						dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
						monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
						monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
						nextText: 'Próximo',
						prevText: 'Anterior'
					});
			});
	</script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="a">Pesquisa Avancada</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="img/search.gif" class="search_bt"/>
    </div>
  </div>
  <div id="header">
    <div id="logo"> <a href=""><img src="img/footer_logo.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content"> <img src="" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title">Venda de Celulares</div> <!-- 3 linhas reservadas para as ofertas (1,2,3,4,5) -->
            <div class="oferta_text"> </div>
            <!-- bot�o de detalhes <a href="details.php" class="details"></a> </div> -->
        </div>
      </div>
      <div class="top_divider"><img src="img/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!--FIM DO BANNER-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      	<ul class="menu">
        	<li><a href="index.php" class="nav1">Home</a></li>
        	<li class="divider"></li>
        	<li><a href="contact.php" class="nav2">Contato</a></li>
        	<li class="divider"></li>
        	<li><a href="promocoes.php" class="nav3">Promocoes</a></li>
        	<li class="divider"></li>
        	<li><a href="minhaconta.php" class="nav4">Minha Conta</a></li>
        	<li class="divider"></li>
        	<li><a href="login.php" class="nav4">Entrar</a></li>
        	<li class="divider"></li>
        	<li><a href="login3.php" class="nav6">Administrador</a></li>
        	<li class="divider"></li>
        	</li>
      	</ul>
      <div class="right_menu_corner"></div>
    </div>
    <!--FIM DO MENU-->
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Contato</span> </div>
    <div class="left_content">
    	<div class="title_box">Administrador</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="">Alterar Cadastros</a></li>
    	  <li class="even"><a href="">Remover Cadastros</a></li>
      	  <li class="even"><a href="">Pesquisar Cadastros</a></li>
          <li class="even"><a href="relatorio2.php">Relatórios</a></li>
          <li class="even"><a href="">Alterar Produtos</a></li>
          <li class="even"><a href="admin2.php">Pedidos Pendentes</a></li>          
      	</ul>
     	<br> </br>
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <?php
    	$rel = $_POST["relat"];
		$dti = $_POST["data"];
		$dtf = $_POST["data2"];
	switch ($rel) {
		case 1:
			include("select.php");
			$array = select("*","pedido","where dtpedi>='$dti 00:00:00' and dtpedi<='$dtf 23:59:59' order by dtpedi desc");
			echo "<div class='center_content'>
    			  <div class='center_title_bar'>Relatório Vendas x Período (".$dti." / ".$dtf."):</div>
    			  <div class='prod_box_big'>
        			<div class='top_prod_box_big'></div>
        			<div class='center_prod_box_big'>
        		  <table align='center' border='1' bordercolor='#000000' style='border-collapse: collapse' cellpadding='2'>
          			<tr>
          				<td class='hhh' width='150px' height='20px'><label class='jjj'>Pedido</label></td>
          				<td class='hhh' width='150px'><label class='jjj'>Valor</label></td>
          				<td class='hhh' width='200px'><label class='jjj'>Data</label></td>
          			</tr>";
			$a = select("count(*)","pedido","where dtpedi>='$dti 00:00:00' and dtpedi<='$dtf 23:59:59'");
			$b = $a[0]['count(*)'];
			$vendas = 0;
			$valtot = 0;
			while($b!=0) {					
          		echo "<tr>
          				<td><a class='ggg' href='admin3.php'>#".$array[$b-1]['codped']."</a></td>
          				<td><label class='ggg'>R$ ".$array[$b-1]['valped'].",00</label></td>
         				<td><label class='ggg'>".$array[$b-1]['dtpedi']."</label></td>
         			 </tr>";
         		$vendas++;
         		$valtot += $array[$b-1]['valped'];
   				$b--; }
			echo "</table>
        			</div>
        		<div class='bottom_prod_box_big'></div> </div>
        		<div class='center_title_bar'>Quantidade Total de Vendas: ".$vendas."</div> 
        		<div class='center_title_bar'>Valor Total das Vendas: R$ ".$valtot.",00</div>
      		
      			</div>";
			break;
		case 2:
			include("select.php");
			$array = select("a.loginu,a.nomeus, b.codusu, sum(b.valped)","usuari a inner join pedido b","on (a.codusu=b.codusu) where b.dtpedi>='$dti 00:00:00' and b.dtpedi <='$dtf 23:59:59' group by a.loginu order by sum(b.valped) asc");
			echo "<div class='center_content'>
    			  <div class='center_title_bar'>Relatório Vendas x Cliente (".$dti." / ".$dtf."):</div>
    			  <div class='prod_box_big'>
        			<div class='top_prod_box_big'></div>
        			<div class='center_prod_box_big'>
        		  <table align='center' border='1' bordercolor='#000000' style='border-collapse: collapse' cellpadding='2'>
          			<tr>
          				<td class='hhh' width='300px' height='20px'><label class='jjj'>Login/Nome do Cliente</label></td>
          				<td class='hhh' width='200px'><label class='jjj'>Valor Total</label></td>
          			</tr>";
			$a = linhas("a.loginu,a.nomeus, b.codusu, sum(b.valped)","usuari a inner join pedido b","on (a.codusu=b.codusu) group by a.loginu");
			while($a!=0) {					
          	echo "<tr>
          				<td><a class='ggg' href='admin3.php'>(".$array[$a-1]['loginu'].") ".$array[$a-1]['nomeus']."</a></td>
          				<td><label class='ggg'>R$ ".$array[$a-1]['sum(b.valped)'].",00</label></td>
         			 </tr>";
   				$a--; }
			echo "</table>
        			</div>
        		<div class='bottom_prod_box_big'></div> </div>   		
      			</div>";
			break;
		case 3:
			include("select.php");
			$array = "SELECT * FROM USUARI E BLA BLA BLA BLA";
	}
    ?>
    <br />
    <br />
    <br /><br /><br />
    <br />
    <br />
    
    <br />
    <!--FIM DA PARTE CENTRAL-->

    <!--FIM DO MENU DA DIREITA-->
    <br />
    <br />
    <br />
    
  </div>
  <div class="footer">
    <div class="left_footer"> <img src="" alt="" width="170" height="49"/> </div>
    <div class="center_footer">Template made by CssCreme<br />
      <a href="http://csscreme.com"><img src="" alt="CssCreme" border="0" /></a><br />
      <img src="img/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="index.php">home</a> <a href="contact.php">contato</a> </div>
  </div>
</div>
<!--FIM DA PARTE DE BAIXO-->
</html>