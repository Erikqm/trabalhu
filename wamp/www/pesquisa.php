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
            <!-- botão de detalhes <a href="details.php" class="details"></a> </div> -->
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
    <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Pesquisa</span> </div>
    <div class="left_content">
      <div class="title_box">Opções de pesquisa</div>
      <br></br>
      <form >
       <li class="currencies">Marca<br></br>
          <select>
           <option>Escolha uma marca</option>
           <option>Samsumg</option>
           <option>Nokia</option>
           <option>LG</option>
           <option>Apple</option>
           <option>Motorola</option>
           <option>HTC</option>
           <option>Sony</option>
           <option>Blackberry</option>
           <option>Nextel</option>
           <br></br>
           </select> 
           <br></br>
           Camera 
           <br></br>
		   <input type="radio" name="camera" value="sim">Sim<br>
		   <input type="radio" name="camera" value="nao">Não<br>
		   <br></br>
           <strong>Sistema Operacional</strong>
           <br></br>
           <input type="radio" name="SO" value="Android">Android<br>
           <input type="radio" name="SO" value="IOS">IOS<br>
           <input type="radio" name="SO" value="windows">Windows Phone<br>
           <br></br>
           Preço
           <br></br>
           <input type="radio" name="preco" value="faixa0">Menos de 250,00<br>
           <input type="radio" name="preco" value="faixa1">De 250,00 à 700,00<br>
           <input type="radio" name="preco" value="faixa2">De 701,00 à 1200,00<br>
           <input type="radio" name="preco" value="faixa3">De 1201,00 à 1700,00<br>
           <input type="radio" name="preco" value="faixa4">Mais de 1700,00<br>
           <br></br>  
           <input type="button" name="pesquisar" value="Pesquisar">      
           </li>
        </form>
      <div class="banner_adds"> <a href=""><img src="" alt="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Pesquisa</div><br /> <br />
        <div class="prod_box_big">
          <div class="top_prod_box_big">
            <div class="center_prod_box_big">
             <div class="search1_form">            
             </div>
            </div>
          </div>
        </div>
      </div> 
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
  		  <a class="ddd" href="cadastro2.php">Cadastre-se</a> 
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