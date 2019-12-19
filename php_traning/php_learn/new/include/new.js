var input1 = document.getElementById('input1'),
    input2 = document.getElementById('input2');


input1.onfocus = function(){

	this.removeAttribute('placeholder');
}

input1.onblur = function(){

	if(input1.value == ''){
		input1.setAttribute('placeholder','username');
	}
}


input2.onfocus = function(){

	input2.removeAttribute('placeholder');
}

input2.onblur = function(){

	if(input2.value == ''){
		input2.setAttribute('placeholder','password');
	}
}


