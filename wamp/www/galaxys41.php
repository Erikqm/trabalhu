<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
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
        	<li><a href="login.php" class="nav4">Minha Conta</a></li>
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
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Produto</span> </div>
    <div class="left_content">
    	<div class="title_box">Produtos</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="">Smartphones</a></li>
    	    <li class="even"><a href="">Tablets</a></li>
        	<li class="odd"><a href="">Celulares</a></li>
    	    <li class="even"><a href="">Nextel</a></li>
        	<li class="odd"><a href="">Acess�rios</a></li>
      	</ul>
      	<div class="title_box">Fornecedores</div>
      	<ul class="left_menu">
	        <li class="odd"><a href="">Samsung</a></li>
    	    <li class="even"><a href="">Nokia</a></li>
        	<li class="odd"><a href="">LG</a></li>
	        <li class="even"><a href="">Motorola</a></li>
    	    <li class="odd"><a href="">Sony</a></li>
        	<li class="even"><a href="">Blackberry</a></li>
     	   <li class="odd"><a href="">Apple</a></li>
        	<li class="even"><a href="">HTC</a></li>
     	</ul>
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
    <?php
    	include("select.php");
		$par = $_GET['codpro'];
		$linha = select("*","produt","where codpro=".$par."");
		$disp = $linha[0]['disppr'];
		if($disp==1) {
			$dis = "Em estoque"; }
		else {
			$dis = "Esgotado";			
		}
    	echo "<div class='center_title_bar'>".$linha[0]['nomepr']."</div>
      <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='product_img_big'> 
          	<a href='javascript:popImage('img/big_pic.jpg','Some Title') '><img src='".$linha[0]['imgpro']."' width='150px' alt='' border='0' /></a>
          </div>
          <div class='details_big_box'>
            <div class='product_title_big'>".$linha[0]['titpro']."</div>
            <div class='specifications'> Disponibilidade: <span class='blue'>".$dis."</span><br />
              Garantia: <span class='blue'>".$linha[0]['garant']." meses</span><br />
            </div>
     		    <div class='prod_price'><span class='price'><b>R$ ".$linha[0]['valorp']."</b></span></div>
            <a href='' class='addtocart'>Adicionar</a> <a target='_blank' href='addcar.php?codpro=".$linha[0]['codpro']."' class='compare'>Mais Detalhes</a> </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div> 
      <div class='center_title_bar'>Produtos Mais Pedidos</div> ";
      $bla = $_GET['codpro'];
      $linhas = select("*","produt","where codpro<>".$bla." order by contpr desc limit 3");
	  for($x=0;$x<3;$x++) {
	  echo "<div class='prod_box'>
        		  <div class='top_prod_box'></div>
       			  <div class='center_prod_box'>
          	    	<div class='product_title'><a href='galaxys41.php?codpro=".$linhas[$x]['codpro']."'>".$linhas[$x]['titpro']."</a></div>
          			<div class='product_img'><a href='galaxys41.php?codpro=".$linhas[$x]['codpro']."'><img src=' ".$linhas[$x]['imgpro']." ' width='150px' alt='' border='0' /></a></div>
     		    <div class='prod_price'><span class='price'><b>R$ ".$linhas[$x]['valorp']."</b></span></div>
  		      </div>
  		      <div class='bottom_prod_box'></div>
   			     <div class='prod_details_tab'> <a href='' title='header=[Add to cart] body=[&nbsp;] fade=[on]'><img src='' alt='' border='' class='left_bt' /></a> <a href='galaxys41.php?codpro=".$linhas[$x]['codpro']."' class='prod_details'>Detalhes</a> </div>
  			    </div> "; }
         ?>
       </div>
    <!--FIM DA PARTE CENTRAL-->
    <div class="right_content">
    	<div class="title_box">Login</div>
  	    <div class="border_box">
      	<br> </br>
        <form>
		  <label for="inputEmail">E-mail</label>
 		  <input id="inputEmail" type="text" placeholder="Email..." />
  		  <label for="inputPassword">Senha</label>
  		  <input id="inputPassword" type="password" placeholder="Senha..." />
  		  <a class="ccc" href="esquecisenha.php">Esqueceu sua senha?</a>
  		  <a class="ddd" href="cadastro.php">Cadastre-se</a> 
  		  <br> </br>
  		  <label> <input type="checkbox" /> Lembrar senha </label>
  		  <button type="submit">Acessar</button>
		  <br></br>
		</form>
     	</div>
        <br> </br>
        <div class="shopping_cart">
        <div class="cart_title">Carrinho</div>
        <div class="cart_details"> X ITENS <br />
          <span class="border_cart"></span> Total: <span class="price">XXXX,XX</span> </div>
        <div class="cart_icon"><a href="addcar.php?proid=<?=$_GET['codpro']" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="img/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
    </div>
    <!--FIM DO MENU DA DIREITA-->
  </div>
  <div class="footer">
    <div class="left_footer"> <img src="" alt="" width="170" height="49"/> </div>
    <div class="center_footer">Template made by CssCreme<br />
      <a href="http://csscreme.com"><img src="" alt="CssCreme" border="0" /></a><br />
      <img src="img/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="indexhtml">home</a> <a href="contact.php">contato</a> </div>
  </div>
</div>
<!--FIM DA PARTE DE BAIXO-->
</html>