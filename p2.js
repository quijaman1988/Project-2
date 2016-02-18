window.onload = function () {

var symbol = document.getElementById("sym");
var  show =true;
symbol.onclick  = function() {

	if (document.getElementById('showSym').style.display == 'none' && show==true){
		document.getElementById('showSym').style.display = 'block';
		show=false;
	}
	else{
		document.getElementById('showSym').style.display = 'none';
		show = true;
	}
}



}
