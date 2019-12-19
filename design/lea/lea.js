
function change(){

	document.getElementById('butt').style.backgroundColor = 'red';
}


function change2(){
	document.getElementById('butt').style.backgroundColor = '#a71652c7';


}

var ooo = document.getElementById('butt2');


 function wwe(){

document.getElementById('footright').style.visibility = 'hidden';
}

function wwe2(){

document.getElementById('footright').style.visibility = 'visible';
}


var nam = document.getElementById('name'),
    ema = document.getElementById('email'),
    mess = document.getElementById('message');

nam.onfocus = function (){
	nam.removeAttribute("placeholder");
}

nam.onblur = function(){
	if(nam.value == ''){
		nam.setAttribute('placeholder',' name');
	}
}


ema.onfocus = function (){
	ema.removeAttribute("placeholder");
}

 ema.onblur = function(){
	if(ema.value == ''){
		ema.setAttribute('placeholder',' Email');
	}}

mess.onfocus = function (){
	mess.removeAttribute("placeholder");
}


 mess.onblur = function(){
	if(mess.value == ''){
		mess.setAttribute('placeholder',' input your email');
	}}
