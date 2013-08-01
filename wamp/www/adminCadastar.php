<?php
	session_start();
	if(isset($_SESSION["nome"])) 
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
    	  <li class="odd"><a href="">Adicionar Produto</a></li>
      	  <li class="odd"><a href="">Remover Produtos</a></li>
          <li class="odd"><a href="">Alterar Produtos</a></li>
          <li class="odd"><a href="">Adicionar Fornecedor</a></li>
          <li class="odd"><a href="">Remover Fornecedor</a></li> 
          <li class="odd"><a href="">Alterar Fornecedor</a></li>              
      	</ul>
      	<br /> <br />
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class="center_content">
      <div class="center_title_bar">Adicionar Produtos</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
            <form action="enviaprod.php" method="POST" name="formpr" onsubmit="return validaCampo();return false;">
             <label class="contact"><strong>Marca:</strong></label>
                <select name="marca" size="1">
                	<?php
						include("select.php");
						$po = select("*","produt","group by marcap");
						$op = linhas("*","produt","group by marcap");
						for(;$op;$op--) {
							echo "<option value='".$po[$op-1]['marcap']."'>".$po[$op-1]['marcap']."</option>"; }             	
                	?>
         </select><br />
         <label class="contact"><strong>Fornecedor:</strong></label>
                <select name="fornec" size="1">
                	<?php
                		echo" <meta charset='utf-8' />";
						$la = select("*","fornec","group by titfor");
						$le = linhas("*","fornec","group by titfor");
						for(;$le;$le--) {
							echo "<option value='".$la[$le-1]['codfor']."'><center>".$la[$le-1]['titfor']."</center></option>"; }             	
                	?>
         </select><br />
            <div class="form_row">
              <label class="contact"><strong>Descrição:</strong></label>
              <input type="text" class="contact_input" name="nome" />
            </div>
            <div class="form_row">
            	<label class="contact"><strong>Tipo:</strong></label>
            	<select name="tipo">
            		<option value="1">Smartphone</option>
  					<option value="1">Tablet</option>
  					<option value="1">Celular</option>
  					<option value="1">Nextel</option>          
            	</select> <br />
            <div class="form_row">
              <label class="contact"><strong>Título:</strong></label>
              <input type="text" class="contact_input" name="titulo" maxlength="22"/>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Valor:</strong></label>
              <input type="text" class="contact_input" name="valor"/>
            </div>
            <div class="form_row">
              <label class="contact"><strong>URL-img:</strong></label>
              <input type="text" class="contact_input" name="img" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Disponível:</strong></label>
              <select name="disp">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Garantia (meses):</strong></label>
              <select name="garant">
              	<option value="12">12</option>
              	<option value="24">24</option>
              	<option value="36">36</option>
              </select>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Touch:</strong></label>
               <select name="touch">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Formato:</strong></label>
              <input type="text" class="contact_input" name="format" />
            </div>
             <div class="form_row">
              <label class="contact"><strong>Display:</strong></label>
               <select name="displ">
              	<option value="3">3"</option>
              	<option value="4">4"</option>
              	<option value="5">5"</option>
              	<option value="6">6"</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Tecnologia:</strong></label>
              	<select name="tec">
              	<option value="2">2G</option>
              	<option value="3">3G</option>
              	<option value="4">4G</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Wifi:</strong></label>
              <select name="wifi">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Bluetooth:</strong></label>
              <select name="bluetooth">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Câmera:</strong></label>
              <select name="cam">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Flash:</strong></label>
              <select name="flash">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Câmera Frontal:</strong></label>
              <select name="frontal">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
                <label class="contact"><strong>Filmadora:</strong></label>
              <select name="film">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>TV:</strong></label>
              <select name="tv">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Radio:</strong></label>
              <select name="radio">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>GPS:</strong></label>
              <select name="gps">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>NFC:</strong></label>
              <select name="nfc">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Processador:</strong></label>
              <select name="proces">
              	<option value="1">0.1 até 1 GHz</option>
              	<option value="2">1.1 até 2 GHz</option>
              	<option value="3">2.1 até 3 GHz</option>
              	<option value="4">3.1 até 4 GHz</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Núcleos:</strong></label>
             <select name="nucleo">
              	<option value="1">1</option>
              	<option value="2">2</option>
              	<option value="4">4</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Banda:</strong></label>
              <select name="band">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Edge:</strong></label>
              <select name="edge">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
             <div class="form_row">
              <label class="contact"><strong>GPRS:</strong></label>
              <select name="gprspr">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
            <div class="form_row">
              <label class="contact"><strong>WAP:</strong></label>
              <select name="wappro">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
              <div class="form_row">
              <label class="contact"><strong>MP3:</strong></label>
              <select name="mp3pro">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
              <div class="form_row">
              <label class="contact"><strong>Entrada p/ Cartão Memória:</strong></label>
              <select name="cartme">
              	<option value="1">Sim</option>
              	<option value="0">Não</option>
              </select>
            </div>
              <div class="form_row">
              <label class="contact"><strong>Sistema Operacional:</strong></label>
              <input type="text" class="contact_input" name="soprod" />
            </div>
            <br></br>
            <input type="submit" value="Cadastrar Produtos" />
            </form>
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>     </div> </div>
      <br> </br>
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
        <div class="cart_icon"><a href="" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="img/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
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