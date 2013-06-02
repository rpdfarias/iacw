function validarDados(destino) {
	var u = document.getElementById('usuario');
	var s = document.getElementById('senha');
	
	if (u.value==null || u.value=='' || s.value==null || s.value=='') {
		alert('Para se logar no sistema entre com seu usuário e senha');
		return;
	}
	window.location=destino=='login' ? "index.php?login=1&usuario="+u.value : "confirmreguser.php";
}