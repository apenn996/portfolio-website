function checkName(name){
	//     % * ! : ; $
	
	var regEx=/^[^\d%*!:;$]{0,20}$/;
	if(!name.match(regEx)|| name ==""){
		document.getElementById('nameHelp').innerHTML='First name must not be blank, contain numbers, or the following characters: *!:;$';
	}
	else{
		document.getElementById('nameHelp').innerHTML="";
	}
	
}



function checkEmail(email){
	//  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 

	var regEx= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
	
	if(!email.match(regEx)){
		document.getElementById('emailHelp').innerHTML='Invalid email address';
	}
	else{
		document.getElementById('emailHelp').innerHTML="";
	}
	
}

function checkPhoneNumber(pNumber){
	//  XXX-XXX-XXXX

	//var regEx= /^\d{3}-\d{3}-\d{4}$/; 
	
	//if(!pNumber.match(regEx)){
	//	document.getElementById('pNumberHelp').innerHTML='Invalid phone number';
	//}
	//else{
	//	document.getElementById('pNumberHelp').innerHTML="";
	//}
	
}

function checkSubject(subject){
	//  % * ! ; :

	var regEx= /^[^%*;:]*$/; 
	
	if(!subject.match(regEx)){
		document.getElementById('subjectHelp').innerHTML='Invalid Subject';
	}
	else{
		document.getElementById('subjectHelp').innerHTML="";
	}
	
}

function checkComments(comment){
	//  % * ! ; :

	var regEx= /^[^%*;]*$/; 
	
	if(!comment.match(regEx)){
		document.getElementById('commentHelp').innerHTML='Invalid comment';
	}
	else{
		document.getElementById('commentHelp').innerHTML="";
	}
	
}
