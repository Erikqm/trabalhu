<?php
      	include("select.php");
		$linhas = select("*","produt","order by contpr desc limit 6");
		echo $linhas;
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