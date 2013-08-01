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
        	</li>
      	</ul>
      <div class="right_menu_corner"></div>
   </div>
    <!--FIM DO MENU-->
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> </div>
    <div class="left_content">
    	<div class="title_box">Categorias</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="pesquisan.php?pq=1&z=1&jk=2&eq=smartphone">Smartphones</a></li>
    	    <li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=tablet">Tablets</a></li>
        	<li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=celular">Celulares</a></li>
    	    <li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=nextel">Nextel</a></li>
      	</ul>
      	<br />
      	<div class="title_box">Marcas</div>
      	<ul class="left_menu">
      	<?php
      		include("select.php");
      		$po = select("*","produt","group by marcap");
			$op = linhas("*","produt","group by marcap");
			for($a=2;$op;$op--) {
				echo "<li class='odd'><a href='pesquisan.php?pq=2&jk=2&z=1&produ=".$po[$op-1]['marcap']."'>".$po[$op-1]['marcap']."</a></li>"; }
		?>
     	</ul>
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
    <?php
		$cont = @$_GET['cont'];
    	$pag = $_GET['pq'];
		$no = $_GET['z'];
		$x = @$_GET['eq'];
		switch ($pag) {
			case 1:
			echo " <div class='center_title_bar'>Pesquisa de Produtos</div>
      <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='contact_form'>
          	<form name='pqs' method='POST' action='pesquisan.php?pq=2&jk=1&z=1'>
          		<label class='contact'><strong>Palavra Chave:</strong></label>
          		<input name='nome' type='text'> <br />
              <label class='contact'><strong>Marca:</strong></label>
              <select name='marca'>
              <option value='1' selected>Escolha uma marca</option>";
			$po = select("*","produt","group by marcap");
			$op = linhas("*","produt","group by marcap");
			for($a=2;$op;$op--) {
				echo "<option value='".$a."'>".$po[$op-1]['marcap']."</option>"; }
           echo "<br></br>
           </select> 
           <br></br>
            <label class='contact'><strong>Câmera:</strong></label>
           <input type='radio' name='camera' value='sim'>Sim
		   <input type='radio' name='camera' value='nao'>Não
        <br></br>
              <label class='contact'><strong>Sistema Operacional:</strong></label>
               <input type='radio' name='so' value='Android'>Android
           <input type='radio' name='so' value='IOS'>IOS
           <input type='radio' name='so' value='windows'>Windows Phone
           <br></br>
            
             <br></br>
            
              <label class='contact'><strong>Preço:</strong></label>
             <br></br>
           <input type='radio' name='preco' value='faixa0'>Menos de R$ 250,00
           <br></br>
           <input type='radio' name='preco' value='faixa1'>De R$ 250,00 a R$ 700,00
           <br></br>
           <input type='radio' name='preco' value='faixa2'>De R$ 701,00 a R$ 1200,00
           <br></br>
           <input type='radio' name='preco' value='faixa3'>De R$ 1201,00 a R$ 1700,00
           <br></br>
           <input type='radio' name='preco' value='faixa4'>Mais de R$ 1700,00
           <br></br>  
            
            
            <input type='submit' value='Pesquisar' />
            <br></br>
          </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div>        
    </div>";	
    break;
		case 2:
			$jk = $_GET['jk'];
			if($no==1) $k=0;
			else $k=$no*9;
			if($jk==1)
			$a = "nomepr like '%".@$_POST['nome']."%'";
else 
	if ($jk==2) $a = "nomepr like '%".@$_GET['produ']."%'";
else $a= "1=1";
		
			$b = @$_POST['preco'] or $b="1=1";
			$linhas = @select("*","produt","where $a");
			$cont = @linhas("*","produt","where $a"); }				
			if($cont==0) 
				echo "<div class='center_title_bar'>Resultado da Pesquisa</div>
      <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='contact_form'>
            <label class='zzz' style='color:red'>A pesquisa não retornou nenhum resultado!</label>
            </div>      
          </div>
        <div class='bottom_prod_box_big'></div>"; 
else echo "<div class='center_content'>
      				<div class='center_title_bar'>Resultado da Pesquisa</div>";
			for(;$cont;$cont--) {
			echo "<div class='prod_box'>
        		  <div class='top_prod_box'></div>
       			  <div class='center_prod_box'>
          	    	<div class='product_title'><a href='galaxys41.php?codpro=".$linhas[$cont-1]['codpro']."'>".$linhas[$cont-1]['titpro']."</a></div>
          			<div class='product_img'><a href='galaxys41.php?codpro=".$linhas[$cont-1]['codpro']."'><img src=' ".$linhas[$cont-1]['imgpro']." ' width='150px' alt='' border='0' /></a></div>
     		    <div class='prod_price'><span class='price'><b>R$ ".$linhas[$cont-1]['valorp']."</b></span></div>
  		      </div>
  		      <div class='bottom_prod_box'></div>
   			     <div class='prod_details_tab'> <a href='' title='header=[Add to cart] body=[&nbsp;] fade=[on]'><img src='' alt='' border='' class='left_bt' /></a> <a href='galaxys42.php?codpro=".$linhas[$cont-1]['codpro']."' class='prod_details'>Detalhes</a> </div>
  			 	</div>"; 
  		echo "<br /> 
      			</div>
      	<label style='float:right; padding:0 15px 0 0;'><a href='pesquisan.php?pq=2&z=1&cont=$cont' class='ccc'>Próxima Página</a></label>
		<br /> <br />
     		</div>";	 }
 	  ?>
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
        <div class="cart_icon"><a href="" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="img/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
    </div> </div>
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