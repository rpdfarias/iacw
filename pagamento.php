<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'php/suporte.php'; ?>
<!DOCTYPE html> 
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Loja para Venda de Celular</title>	
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css" href="css/pagamento.css" />
		<script type="text/javascript" src="js/pagamento.js"></script>
	</head>
	<body>
		<div id="container">
			<?php
			montaTopo();
			montaMenuOpcoes();
			montaListaFabricantes();
			?>

			<!--pagamento-->
			<div class="center_content">

				<div class="titulo">Endereço de Cobrança</div>
				<div class="bloco">
					<div class="linha">
						<span class="cabecalho">Logradouro:</span>
						<span class="campo">Rua Pien</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Número:</span>
						<span class="campo">123</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Complemento:</span>
						<span class="campo">AP 999</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Bairro:</span>
						<span class="campo">Jd. Dona Joaquina</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Cidade:</span>
						<span class="campo">Pinhais</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Estado:</span>
						<span class="campo">Paraná</span>
					</div>
					<div class="linha">
						<input class="botao" type="button" value="Alterar Endereço" onclick="alterarEndereco();" />
					</div>
				</div>

				<div class="titulo">Endereço de Entrega</div>				
				<div class="bloco">
					<div class="linha">
						<span class="cabecalho">Logradouro:</span>
						<span class="campo">Rua Humberto Higino Parolin</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Número:</span>
						<span class="campo">123</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Complemento:</span>
						<span class="campo">-</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Bairro:</span>
						<span class="campo">Xaxim</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Cidade:</span>
						<span class="campo">Curitiba</span>
					</div>
					<div class="linha">
						<span class="cabecalho">Estado:</span>
						<span class="campo">Paraná</span>
					</div>
					<div class="linha">
						<input class="botao" type="button" value="Alterar Endereço" onclick="alterarEndereco();" />
					</div>
				</div>

				<div class="titulo">Dados do Pagamento</div>
				<div class="bloco">
					<div class="linha">
						<span class="cabecalho">Forma de Pagamento:</span>
						<select>
							<option>-</option>
							<option>Boleto Bancário</option>
							<option>Cartão Visa</option>
							<<<<<<< HEAD
							<option selected>Cartão Mastercard</option>
						</select>
					</div>
					<div class="linha">
						<span class="cabecalho">Nome Como Consta no Cartão</span>
						<input class="nome" value="RODRIGO DE FARIAS"/>
					</div>
					<div class="linha">
						<span class="cabecalho">Número do Cartão</span>
						<input class="numero" value="1234 5678 1478 9632"/>
					</div>
					<div class="linha">
						<span class="cabecalho">Código de Segurança</span>
						<input class="codigo" value="123"/>
					</div>
					<div class="linha">
						<span class="cabecalho">Validade</span>
						<input class="mes" value="01"/>
						<input class="ano" value="2013"/>
						<span class="cabecalho">(mm/aaaa)</span>					
					</div>
					<div class="linha">
						<input class="botao" type="button" value="Finalizar" onclick="finalizaPedido();" />
					</div>
				</div>
			</div>			

			<?php montaCarrinho(); ?>

		</div>

		<?php montaRodape(); ?>

	</body>
</html>
