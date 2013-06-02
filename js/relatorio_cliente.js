function realizarConsulta() {
	var u = document.getElementById('dt_inicial');
	var s = document.getElementById('dt_final');		
	
	if (u.value==null || u.value=='' || s.value==null || s.value=='') {
		alert('Para realizar a consulta informe o período antes');
		return;
	}
	
	if (validaData(u) || validaData(s)) {
		alert('Data em formato inválido, verifique as datas');
		return;
	}
	
	alert('sem acesso a banco, lamento');
}

function validaData(dt) {
	var expReg = /^(([0-2]\d|[3][0-1])\/([0]\d|[1][0-2])\/[1-2][0-9]\d{2})$/;

	if (dt.value.match(expReg)==null)
		return true;
	
	var p = dt.value.split('/');
	
	//valida meses com menos dias incluindo fevereiro
	if (((p[1]==4 || p[1]==6 || p[1]==9 || p[1]==11) && p[0]>30) ||
		(p[2]%4!=0 && p[1]==2 && p[0]>28) || 
		(p[2]%4==0 && p[1]==2 && p[0]>29))
		return true;

	return false;
}