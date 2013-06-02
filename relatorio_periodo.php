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
			<link rel="stylesheet" type="text/css" href="css/relatorio_periodo.css" />
			<link rel="stylesheet" type="text/css" href="jquery/css/smoothness/jquery-ui-1.10.3.custom.css" />
			<script type="text/javascript" src="js/relatorio_periodo.js"></script>
			<script type="text/javascript" src="jquery/js/jquery-1.9.1.js"></script>
			<script type="text/javascript" src="jquery/js/jquery-ui-1.10.3.custom.js"></script>
			<script>
				$(function() {
					$('input').filter('.datepicker').datepicker({
						nextText: "Próximo",
						prevText: "Anterior",
						dateFormat: "dd/mm/yy",
						dayNamesMin: [ "Dm", "Sg", "Tr", "Qa", "Qi", "Sx", "Sb"],
						monthNames: [ "Janeiro", "Fevereiro", "Marco" , "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]
					});
				});
			</script>
		</head>
		<body>
			<div id="container">
				<?php
				montaTopo();
				montaMenuOpcoes();
				montaListaFabricantes();
				?>

				<!--relatorio-->
				<div class="center_content">

					<div class="titulo">Relatório de Vendas por Período</div>
					<div class="bloco">
						<div class="linha">							
							<span class="cabecalho">Data Inicial</span><br>
							<input type="text" class="datepicker" id="dt_inicial" placeholder="dd/mm/aaaa"	maxlength="0" />
						</div>
						<div class="linha">
							<span class="cabecalho">Data Final</span><br>
							<input type="text" class="datepicker" id="dt_final" placeholder="dd/mm/aaaa"	maxlength="0" />
						</div>
						<div class="linha">
							<input type="button" value="Consultar" onclick="realizarConsulta();" />
						</div>					
					</div>

					<div class="tabela"></div>

					<div class="tb_head tb_fabricante">Fabricante</div>
					<div class="tb_head tb_modelo">Modelo</div>
					<div class="tb_head tb_quantidade">Quantidade</div>
					<div class="tb_head tb_valor">Valor Total</div>

					<div class="tb_datai tb_fabricante">Sony</div>
					<div class="tb_datai tb_modelo">XPERIA</div>
					<div class="tb_datai tb_quantidade">99</div>
					<div class="tb_datai tb_valor">R$ 1.111,11</div>
					
					<div class="tb_datap tb_fabricante">Nokia</div>
					<div class="tb_datap tb_modelo">N10</div>
					<div class="tb_datap tb_quantidade">23</div>
					<div class="tb_datap tb_valor">R$ 111,11</div>
					
					<div class="tb_datai tb_fabricante">Samsung</div>
					<div class="tb_datai tb_modelo">Asta ta la Vista</div>
					<div class="tb_datai tb_quantidade">77</div>
					<div class="tb_datai tb_valor">R$ 11,11</div>
					
					<div class="tb_datap tb_fabricante">CCE</div>
					<div class="tb_datap tb_modelo">Começou Comprando Errado</div>
					<div class="tb_datap tb_quantidade">Total</div>
					<div class="tb_datap tb_valor">R$ 1233,33</div>

				</div>
 
				<?php montaCarrinho(); ?>

			</div>

			<?php montaRodape(); ?>

		</body>
	</html>
