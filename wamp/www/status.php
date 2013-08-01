<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
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
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Minha Conta</span> </div>
    <div class="left_content">
    	<div class="title_box">Minha Conta</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="">Alterar Cadastro</a></li>
    	    <li class="even"><a href="statuscliente.php">Minhas Compras</a></li>
      	</ul>
    </div>
  <!--FIM DO MENU DA ESQUERDA-->
  <?php
  	include("select.php");
  	$cp = $_GET['codped'];
  	$array = @select("a.codped,b.imgpro,b.titpro,a.qtdpro,a.valpro,c.statpe,c.dtpedi","proped a inner join produt b inner join pedido c","on (a.codped=c.codped and a.codpro=b.codpro) where a.codped=$cp");
  	$ctd = @linhas("a.codped,b.imgpro,b.titpro,a.qtdpro,a.valpro,c.statpe,c.dtpedi","proped a inner join produt b inner join pedido c","on (a.codped=c.codped and a.codpro=b.codpro) where a.codped=$cp");  	
  	echo "<div class='center_content'>
      <div class='center_title_bar'>Informações do Pedido #".$array[0]['codped'].":</div>";
    $tot = 0;
    for(;$ctd;$ctd--) {
    	$v = $array[$ctd-1]['valpro'];
		$q = $array[$ctd-1]['qtdpro'];
		$res = $q*$v;
	  echo "<div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='product_img_big'> 
          	<a href='javascript:popImage('img/big_pic.jpg','Some Title') '><img width='150px' src='".$array[$ctd-1]['imgpro']."' alt='' border='0' /></a>
          </div>
          <div class='details_big_box'>
            <div class='product_title_big'>".$array[$ctd-1]['titpro']."</div><br />
            <div class='specifications'> Quantidade: <span class='blue'> ".$array[$ctd-1]['qtdpro']."
</span><br /><br />
              Valor Total: <span class='blue'> R$ ".$res.",00</span><br />
        </div> </div>
     </div>
       "; 
		$tot += $res; }
      
       echo "<div class='bottom_prod_box_big'></div>
      </div>
       <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
    		<div class='specifications'> Total da Compra: <span class='blue'> R$ ".$tot.",00</span> </div><br />
              </div> 
              
        <div class='bottom_prod_box_big'></div>
      </div>     
      <div class='center_title_bar'>Status da Compra #".$array[0]['codped']."</div>
      <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='specifications'> Status: <span class='blue'>Status!
</span><br /><br />
              Data de Cria��o <span class='blue'>01/06/2013 - 00:27</span>
            </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div>    
       </div> ";
  ?>
    
    <!--FIM DA PARTE CENTRAL-->

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