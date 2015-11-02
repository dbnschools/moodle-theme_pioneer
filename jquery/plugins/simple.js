if (location.href.substr('/modedit.php?add=')) {
	var style = document.createElement('link');
	style.type = 'text/css';
	style.href = '../../style/simple.css';
	var head = document.getElementsByTagName('head')[0];
	head.appendChild(style);
}
