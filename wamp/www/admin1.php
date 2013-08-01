<?php
	session_start();
	if($_SESSION["nome"]=="administrador") 
		echo "";
	else header("location:login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="pesquisa.php">Pesquisa Avancada</a></div>
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
        	<li><a href="admin1.php" class="nav4">Minha Conta</a></li>
        	<li class="divider"></li>
        	<li><a href="admin1.php" class="nav4">Entrar</a></li>
        	<li class="divider"></li>
        	<li><a href="admin1.php" class="nav6">Administrador</a></li>
        	<li class="divider"></li>
        	</li>
      	</ul>
      <div class="right_menu_corner"></div>
    </div>
    <!--FIM DO MENU-->
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Minha Conta (Admin)</span> </div>
    <div class="left_content">
    	<div class="title_box">Administrador</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="relatorio2.php">Relatórios</a></li>
    	  <li class="odd"><a href="admincadastar.php">Adicionar Produto</a></li>
      	  <li class="odd"><a href="">Remover Produtos</a></li>
          <li class="odd"><a href="">Alterar Produtos</a></li>
          <li class="odd"><a href="cadafor.php">Adicionar Fornecedor</a></li>
          <li class="odd"><a href="">Remover Fornecedor</a></li> 
          <li class="odd"><a href="">Alterar Fornecedor</a></li>              
      	</ul>
      	<br /> <br />
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
      <div class="center_title_bar">Últimos Pedidos</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <table align="center" border="1" bordercolor="#000000" style="border-collapse: collapse" cellpadding="2">
          	<tr>
          		<td class="hhh" width="300px" height="20px"><label class="jjj">Pedido</label></td>
          		<td class="hhh" width="200px"><label class="jjj">Status</label></td>
          	</tr>
          	<?php
          		include("select.php");
          		$linhas = select("*","pedido","limit 3");
				for($a=0;$a<3;$a++) {
					switch ($linhas[$a]['statpe']) {
						case 1:
							$status = "Concluído";
							break;
						case 2:
							$status = "Cancelado";
							break;
						default:
							$status = "Pendente"; 
					}
					echo "<tr>
          		<td><a class='ggg' href='admin3.php'>#".$linhas[$a]['codped']."</a></td>
          		<td><a class='ggg' href='admin3.php'>".$status."</a></td>
          </tr>"; }
          	?>
          </table>
          <br />
          <a style="float: right; padding: 0 15px 0 0;" class="ddd" href="admin2.php">Ver Todos</a>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>     
     
     </div>
    <!--FIM DA PARTE CENTRAL-->
    <div class="right_content">
     
    </div>
    <!--FIM DO MENU DA DIREITA-->
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