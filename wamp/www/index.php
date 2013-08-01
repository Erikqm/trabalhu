<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html;" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
	<div class="top_bar">
		<div class="top_search">
      		<div class="search_text"><a href="pesquisan.php?pq=1&z=1">Pesquisa Avancada</a></div>
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
        	<li><a href="minhaconta.php" class="nav4">Minha Conta</a></li>
        	<li class="divider"></li>
        	<li><a href="login.php" class="nav4">Entrar</a></li>
        	<li class="divider"></li>
        	<li><a href="login3.php" class="nav6">Administrador</a></li>
        	<li class="divider"></li>
        	<li><a href="cadastro.php" class="nav4">Cadastre-se</a></li>
        	<?php
        	session_start();
 			if (isset($_SESSION["nome"])) {
  				echo "<li class='divider'></li>
        	<li><a href='phpdestroy.php' class='nav2'>Sair</a></li> "; }
			?>
        	</li>
      	</ul>
      <div class="right_menu_corner"></div>
   </div>
    <!--FIM DO MENU-->
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> </div>
    <div class="left_content">
    	<div class="title_box">Categorias</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="pesquisan.php?pq=1&z=1&jk=2&eq=1">Smartphones</a></li>
    	    <li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=3">Tablets</a></li>
        	<li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=2">Celulares</a></li>
    	    <li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=4">Nextel</a></li>
      	</ul>
      	<br />
      	<div class="title_box">Fabricantes</div>
      	<ul class="left_menu">
      	<?php
      		include("bd.php");
      		$po = select("*","fabric","where 1=1");
			$op = linhas("*","fabric","where 1=1");
			for($a=2;$op;$op--) {
				echo "<li class='odd'><a href='pesquisan.php?pq=2&jk=2&z=1&produ=".$po[$op-1]['nomefa']."'>".$po[$op-1]['nomefa']."</a></li>"; }
		?>
     	</ul>
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
      <div class="center_title_bar">Produtos Mais Pedidos</div>

      	<?php
		$linhas = @select("*","produt","order by contpr desc limit 6");
		for($x=0;$x<6;$x++) {
			echo "<div class='prod_box'>
        		  <div class='top_prod_box'></div>
       			  <div class='center_prod_box'>
          	    	<div class='product_title'><a href='galaxys41.php?codpro=".$linhas[$x]['codpro']."'>".$linhas[$x]['titpro']."</a></div>
          			<div class='product_img'><a href='galaxys41.php?codpro=".$linhas[$x]['codpro']."'><img src=' ".$linhas[$x]['imgpro']." ' width='150px' alt='' border='0' /></a></div>
     		    <div class='prod_price'><span class='price'><b>R$ ".$linhas[$x]['valorp']."</b></span></div>
  		      </div>
  		      <div class='bottom_prod_box'></div>
   			     <div class='prod_details_tab'> <a href='' title='header=[Add to cart] body=[&nbsp;] fade=[on]'><img src='' alt='' border='' class='left_bt' /></a> <a href='galaxys42.php?codpro=".$linhas[$x]['codpro']."' class='prod_details'>Detalhes</a> </div>
  			    </div> "; }
      	?>     	
      <br />
      </div>
     <br />
     </div>
 
    <!--FIM DA PARTE CENTRAL-->
    <div class="right_content">
    	<?php
  		 @session_start();
  		 if (isset($_SESSION["nome"])){
  		echo" ";}
		else{
		echo" 
    	<div class='title_box'>Login</div>
  	    <div class='border_box'>
      	<br> </br>
        <form action='index.php'>
		  <label for='inputEmail'>E-mail</label>
 		  <input id='inputEmail' type='text' placeholder='Email...' />
  		  <label for='inputPassword'>Senha</label>
  		  <input id='inputPassword' type='password'placeholder='Senha...'/>
  		  <a class='ccc' href='esquecisenha.php'>Esqueceu sua senha?</a>
  		  <a class='ddd' href='cadastro2.php'>Cadastre-se</a> 
  		  <br> </br>
  		  <label> <input type='checkbox' /> Lembrar senha </label>
  		  <button type='submit'>Acessar</button>
		  <br></br>
		</form>
     	</div>";}
     	?>
     	<br />
     	        <div class='shopping_cart'>
        <div class='cart_title'>Carrinho</div>
	
<div class='cart_details'></div><br />
          <span class='border_cart'></span> Total: <span class='price'>XXXX,XX</span> </div>
        <div class='cart_icon'><a href='carrinho.php' title='header=[Checkout] body=[&nbsp;] fade=[on]'><img src='img/shoppingcart.png' alt='' width='48' height='48' border='0' /></a></div>
      </div>
    </div>
    <!--FIM DO MENU DA DIREITA-->
  </div>
<!--FIM DA PARTE DE BAIXO-->
</html>