 <div class='center_title_bar'>Pesquisa de Produtos</div>
      <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='contact_form'>
          	<form name='pqs' method='POST' action='pesquisan.php?pq=2&z=1'>
          		<label class='contact'><strong>Palavra Chave:</strong></label>
          		<input name='nome' type='text'> <br />
              <label class='contact'><strong>Marca:</strong></label>
              <select name='marca'>
    	        <option value='1' selected>Escolha uma marca</option>
       		    <option value='2'>Samsumg</option>
	            <option value='3'>Nokia</option>
		        <option value='4'>LG</option>
       		    <option value='5'>Apple</option>
	            <option value='6'>Motorola</option>
	       	    <option value='7'>HTC</option>
	       	    <option value='8'>Sony</option>
	 	        <option value='9'>Blackberry</option>
	            <option value='10'>Nextel</option>
           <br></br>
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
    </div>