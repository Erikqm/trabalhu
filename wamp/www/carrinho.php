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
  <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
      <div class="center_title_bar">Confirmação de Carrinho</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="product_img_big"> 
          	<a href="javascript:popImage('img/big_pic.jpg','Some Title') "><img src="img/sonyxperias.gif" alt="" border="0" /></a>
          </div>
          <div class="details_big_box">
            <div class="product_title_big">Sony Xperia S<br />Smartphone Desbloqueado Preto<br />WiFi</div><br />
            <div class="specifications"> Quantidade: <span class="blue"><select>
            	 <option>1</option>
            	<option>2</option>
            	<option>3</option>
            	<option>4</option>
            	<option>5</option>
            	<option>6</option>
            	<option>7</option>
            	<option>8</option>
            	<option>9</option>
          </select>
</span><br /><br />
              Valor Total: <span class="blue"> R$ 1.179,00</span><br />
        </div> </div>
            <a href="" class="addtocart">Remover</a>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
            <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="product_img_big"> 
          	<a href="javascript:popImage('img/big_pic.jpg','Some Title') "><img src="img/galaxys4.gif" alt="" border="0" /></a>
          </div>
          <div class="details_big_box">
            <div class="product_title_big">Galaxy SIV<br />Smartphone Desbloqueado Branco<br />4G/WiFi e Tela 5"</div><br />
            <div class="specifications"> Quantidade: <span class="blue">
            	
            <select>
            	 <option>1</option>
            	<option>2</option>
            	<option>3</option>
            	<option>4</option>
            	<option>5</option>
            	<option>6</option>
            	<option>7</option>
            	<option>8</option>
            	<option>9</option>
          </select>
</span><br /><br />
              Valor Total: <span class="blue">R$ 2.399,00</span>
            </div>
            <a href="" class="addtocart">Remover</a> </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
       <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
    		<div class="specifications"> Total do Carrinho: <span class="blue"> R$ 3.578,00</span> </div><br />
              <div class="form_row"><a href="index.php" class="contact">Cancelar</a> <a href="compra1.php?a=0" class="contact">Confirmar</a></div>
            
        </div>      
        <div class="bottom_prod_box_big"></div>
      </div>     
       </div> </div>
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