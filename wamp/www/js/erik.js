
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
 
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;}
if(document.cadastro.user.value==""){
	alert("Campo usuário é obrigatório")
	return false;}
else if(document.cadastro.name.value==""){
	alert("Campo nome é obrigatório")
	return false;}
else if(document.cadastro.email1.value==""){
	alert("Campo email é obrigatório")
	return false;}
else if(document.cadastro.cpf.value==""){
	alert("Campo CPF é obrigatório")
	return false;}
else if(document.cadastro.rg.value==""){
	alert("Campo RG é obrigatório")
	return false;}
else if(document.cadastro.tel1.value==""){
	alert("Campo Telefone1 é obrigatório")
	return false;}
else if(document.cadastro.date.value==""){
	alert("Campo Data de nascimento é obrigatório")
	return false;}
if(document.cadastro.email1.value!=document.cadastro.confirmemail.value){
alert("Emails não são iguais")
return false;}
return true;}