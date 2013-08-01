<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="pesquisa.html">Pesquisa Avancada</a></div>
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
            <!-- botão de detalhes <a href="details.html" class="details"></a> </div> -->
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
        	<li><a href="index2.html" class="nav1">Home</a></li>
        	<li class="divider"></li>
        	<li><a href="contact.html" class="nav2">Contato</a></li>
        	<li class="divider"></li>
        	<li><a href="promocoes.html" class="nav3">Promocoes</a></li>
        	<li class="divider"></li>
        	<li><a href="minhaconta.html" class="nav4">Minha Conta</a></li>
        	<li class="divider"></li>
        	<li><a href="login.html" class="nav4">Entrar</a></li>
        	<li class="divider"></li>
        	<li><a href="login3.html" class="nav6">Administrador</a></li>
        	<li class="divider"></li>
        	</li>
      	</ul>
      <div class="right_menu_corner"></div>
    </div>
    <!--FIM DO MENU-->
         <div class="crumb_navigation"> Navigation: <a href="index2.html">Home</a> &lt; <span class="current">Cadastro</span> </div>
    <div class="left_content">
    	<div class="title_box">Produtos</div>
        <ul class="left_menu">
      	  <li class="odd"><a href="">Smartphones</a></li>
    	    <li class="even"><a href="">Tablets</a></li>
        	<li class="odd"><a href="">Celulares</a></li>
    	    <li class="even"><a href="">Nextel</a></li>
        	<li class="odd"><a href="">Acessórios</a></li>
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
      <div class="center_title_bar">Cadastro</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
          	<form name="cadastro2" action="envia.php" method="post" onsubmit="return verificarvaz();">
          		<script type="text/javascript" src="js/valida.js"></script>
          	<?php
          		echo "<input type='hidden' value='".$_POST['user']."' name='user'>
          		<input type='hidden' value='".$_POST['sex']."' name='sex'>
          		<input type='hidden' value='".$_POST['name']."' name='name'>
          		<input type='hidden' value='".$_POST['email1']."' name='email1'>
          		<input type='hidden' value='".$_POST['cpf']."' name='cpf'>
          		<input type='hidden' value='".$_POST['rg']."' name='rg'>
				<input type='hidden' value='".$_POST['tel1']."' name='tel1'>
				<input type='hidden' value='".$_POST['tel2']."' name='tel2'>
				<input type='hidden' value='".$_POST['tel3']."' name='tel3'>
				<input type='hidden' value='".$_POST['date']."' name='date'>";
          	?>
            <div class="form_row">
              <label class="contact"><strong>*Cep:</strong></label>
              <input type="text" name="cep" class="contact_input" />
            </div>
             <div class="form_row">
              <label class="contact"><strong>*Endereco:</strong></label>
              <input type="text" name="end" class="contact_input" />
             <div class="form_row">
              <label class="contact"><strong>*Cidade:</strong></label>
              <input type="text" name="cid" class="contact_input" />
            </div>
             <div class="form_row">
              <label class="contact"><strong>*Numero:</strong></label>
              <input type="text" name="num" class="contact_input" />
            </div>            
             <div class="form_row">
              <label class="contact"><strong>Ap/bl:</strong></label>
              <input type="text" name="comp" class="contact_input" />
            </div>             
            <div class="form_row">
              <label class="contact"><strong>*Estado:</strong></label>
              <select name="estado" size="1">
              	<option value="">  </option>
              	<option value="ac">AC</option>
              	<option value="al">AL</option>
              	<option value="am">AM</option>
              	<option value="ap">AP</option>
              	<option value="ba">BA</option>
              	<option value="ce">CE</option>
              	<option value="df">DF</option>
              	<option value="es">ES</option>
              	<option value="go">GO</option>
              	<option value="ma">MA</option>
              	<option value="mg">MG</option>
              	<option value="ms">MS</option>
              	<option value="mt">MT</option>
              	<option value="pa">PA</option>
              	<option value="pb">PB</option>
              	<option value="pe">PE</option>
              	<option value="pi">PI</option>
              	<option value="pr">PR</option>
              	<option value="rj">RJ</option>
              	<option value="rn">RN</option>
              	<option value="ro">RO</option>
              	<option value="rr">RR</option>
              	<option value="rs">RS</option>
              	<option value="sc">SC</option>
              	<option value="se">SE</option>
              	<option value="sp">SP</option>
              	<option value="to">TO</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>*País:</strong></label>
              <input type="text" name="pais" class="contact_input" />
            </div>            
            <div class="form_row">
              <label class="contact"><strong>*Senha:</strong></label>
              <input type="password" name="senha" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Confirme sua senha:</strong></label>
              <input type="password" name="senha1" class="contact_input" />
             </div>
             <input type="submit" value="Enviar" />
             </form>
            </div>
          </div>
       </div>
        <div class="bottom_prod_box_big"></div>
      </div>     </div>
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
  		  <a class="ccc" href="esquecisenha.html">Esqueceu sua senha?</a>
  		  <a class="ddd" href="cadastro.html">Cadastre-se</a> 
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
        <div class="cart_icon"><a href="carrinho.html" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="img/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
    </div>
    <!--FIM DO MENU DA DIREITA-->
  </div>
  <div class="footer">
    <div class="left_footer"> <img src="" alt="" width="170" height="49"/> </div>
    <div class="center_footer">Template made by CssCreme<br />
      <a href="http://csscreme.com"><img src="" alt="CssCreme" border="0" /></a><br />
      <img src="img/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="index2.html">home</a> <a href="contact.html">contato</a> </div>
  </div>
</div>
<!--FIM DA PARTE DE BAIXO-->
</html>