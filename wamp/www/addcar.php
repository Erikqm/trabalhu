<?php
session_start();
$prod = $_GET['codpro'];

if(array_key_exists($prod,$_SESSION['carrinho']))
  $_SESSION['carrinho'][$prod]++;
else
  $_SESSION['carrinho'][$prod] =1;


?>