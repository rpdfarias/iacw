<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'php/suporte.php';

function getDestino() {
	echo $_GET['redirect'] == '' ? "'login'" : "'cadastro'";
}
?>
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Loja para Venda de Celular</title>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	<body>
		<div id="container">
			<?php
			montaTopo();
			montaMenuOpcoes();
			montaListaFabricantes();
			?>

			<!--login-->
			<div class="center_content">				
				<div class="titulo">Entre com seu Usuário e Senha</div>
				<div class="bloco">
					<div class="linha">
						<span class="cabecalho">Login</span><br/>
						<input type="text" id="usuario" />
					</div>
					<div class="linha">
						<span class="cabecalho">Senha</span><br/>
						<input type="password" id="senha" />						
					</div>
					<div class="linha">						
						<input type="button" value="Entrar" onclick="validarDados(<?php getDestino() ?>);" />
					</div>
					<div class="mensagem">
						Novo usuário? <a href="reguser.php">Clique aqui</a> para se cadastrar.
					</div>
				</div>
			</div>			

			<?php montaCarrinho(); ?>

		</div>

		<?php montaRodape(); ?>

	</body>
</html>