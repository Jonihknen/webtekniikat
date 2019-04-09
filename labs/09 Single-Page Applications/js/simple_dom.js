//console.log('page loaded');

console.log(document);

var paragraphs = document.querySelectorAll('#summary p');
document.querySelector('#userForm input[type="email"]').onkeyup = function() {
	console.log('updating email');
	var email = document.querySelector('#userForm input[type="email"]').value;
	//document.querySelector('#summary p').innerHTML = email;
	paragraphs[0].innerHTML = (email);
};
document.querySelector('#userForm input[type="text"]').onkeyup = function() {
	console.log('updating name');
	var name = document.querySelector('#userForm input[type="text"]').value;
	document.querySelector('#summary h1').innerHTML = (name);
};
document.querySelector('#userForm input[type="password"]').onkeyup = function() {
	console.log('updating password');
	var pw = document.querySelector('#userForm input[type="password"]').value;
	paragraphs[1].innerHTML = (pw);
};

