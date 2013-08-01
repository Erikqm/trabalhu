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
      	  <li class="odd"><a href="pesquisan.php?pq=1&z=1&eq=smartphone">Smartphones</a></li>
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
				echo "<li class='odd'><a href='pesquisan.php?pq=2&z=1&mc=".$po[$op-1]['marcap']."'>".$po[$op-1]['marcap']."</a></li>"; }
		?>
     	</ul>
    </div>
    <!--FIM DO MENU DA ESQUERDA-->        <div class="center_content">
      <div class="center_title_bar">Cadastro</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
  	<form name="cadastro" action="cadastro2.php" method="post" onsubmit="return verificarCPF(cpf.value)">
          		<script type="text/javascript" src="js/erik.js" ></script>
            <div class="form_row">
              <label class="contact"><strong>*Usuário:</strong></label>
              <input type="text" name="user" class="contact_input" />
            </div>
              <label class="contact"><strong>*Sexo:</strong></label>
	    		  <input type="radio" name="sex" value="0" checked="checked">Masculino</input>
	      		  <input type="radio" name="sex" value="1">Feminino</input>	 
             <div class="form_row">
              <label class="contact"><strong>*Nome:</strong></label>
              <input type="text" name="name" class="contact_input" />
            </div>
             <div class="form_row">
              <label class="contact"><strong>*Email:</strong></label>
              <input type="text" name="email1" class="contact_input" />
            </div>
             <div class="form_row">
              <label class="contact"><strong>*Confirme o email:</strong></label>
              <input type="text" name="email2" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>*CPF:</strong></label>
              <input type="text" name="cpf" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>*RG:</strong></label>
              <input type="password" name="rg" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>*Telefone 1:</strong></label>
              <input type="password" name="tel1" class="contact_input" />
             </div>
             <div class="form_row">
              <label class="contact"><strong>Telefone 2:</strong></label>
              <input type="password" name="tel2" class="contact_input" />
             </div>
             <div class="form_row">
              <label class="contact"><strong>Telefone 3:</strong></label>
              <input type="password" name="tel3" class="contact_input" />
             </div>
              <div class="form_row">
              <label class="contact"><strong>Data de Nascimento:</strong></label>
              <input type="text" name="date" class="contact_input"/>
              </div>
              <input type="submit" value="Continuar" />
              <br></br>
               <label <strong>Campos marcados com "*" sao obrigatorios </strong></label>
             </form>
            </div>
          </div>
         </div>
       
        <div class="bottom_prod_box_big"></div>
       </div>
      <br> </br>
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
     	<br />
        <div class="shopping_cart">
        <div class="cart_title">Carrinho</div>
        <div class="cart_details"> X ITENS <br />
          <span class="border_cart"></span> Total: <span class="price">XXXX,XX</span> </div>
        <div class="cart_icon"><a href="carrinho.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="img/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
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