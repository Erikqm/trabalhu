﻿<?php
   session_start();
   if (isset($_SESSION["nome"])){
   	$H=2;}
   else {       
    header("location:login.php");}
   ?>
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
     <div class="crumb_navigation"> Navigation: <a href="index.php">Home</a> &lt; <span class="current">Compra</span> </div>
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
     	<br /><br />
    </div>
    <!--FIM DO MENU DA ESQUERDA-->
    <div class='enter_content'>
      <div class='center_title_bar'>Modo de Pagamentol</div>
      <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div align='center' class='center_prod_box_big'>
         <label class='zzz'>Como você deseja efetuar o pagamento?</label>
         <br /> <br />
         <form name="compra" action="compra4.php" method="post">
         <input type="radio" name="forma" value="av" />À vista
         <br></br>
         <input type="radio" name="forma" value="ap" />2 vezes no cartão
         <br></br>
         <input type="radio" name="forma" value="ap" />3 vezes no cartão
         <br></br>
         <input type="radio" name="forma" value="ap" />4 vezes no cartão
         <br></br>
         <br></br>
         <label <strong>Endereço de entrega:</strong></label>
         <div class="form_row">
              <br></br>
              <label class="contact"><strong>Rua:</strong></label>
              <input type="text" name="rua" class="contact_input" />
            </div>
            <br></br>
            <div class="form_row">
              <label class="contact"><strong>Numero:</strong></label>
              <input type="text" name="num" class="contact_input" />
            </div>
            <br></br>
            <div class="form_row">
              <label class="contact"><strong>Cidade:</strong></label>
              <input type="text" name="cid" class="contact_input" />
            </div>
            <br></br>
            <div class="form_row">
              <label class="contact"><strong>Complemento:</strong></label>
              <input type="text" name="comp" class="contact_input" />
            </div>
         <br></br>
        <div class="bottom_prod_box_big"></div>
        <input type="submit" value="Prosseguir" />
        </form>
         </div>
      </div>     
      <br> </br>
     </div>
    </form>
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
