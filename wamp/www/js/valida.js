function verificarvaz(){

if(document.cadastro2.cep.value==""){
	alert("Campo CEP é obrigatório")
	return false;}
else if(document.cadastro2.end.value==""){
	alert("Endereco é obrigatório")
	return false;}
else if(document.cadastro2.num.value==""){
	alert("Campo Numero é obrigatório")
	return false;}
else if(document.cadastro2.estado.value==""){
	alert("Campo Estado é obrigatório")
	return false;}
else if(document.cadastro2.pais.value==""){
	alert("Campo país é obrigatório")
	return false;}
else if(document.cadastro2.cid.value==""){
	alert("Campo Cidade é obrigatório")
	return false;}
else if(document.cadastro2.senha.value==""){
	alert("Campo Senha é obrigatório")
	return false;}
else if(document.cadastro2.senha1.value==""){
	alert("Confirme sua senha")
	return false;}
if(document.cadastro2.senha1.value!=document.cadastro2.senha.value){
alert("Senhas não são iguais")
return false;
}
return true;
 }
