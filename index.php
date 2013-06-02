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
	</head>
	<body>

		<div id="container">
			<?php
			montaTopo();
			montaMenuOpcoes();
			montaListaFabricantes();
			?>

			<!--lista de produtos-->
			<div class="center_content">
				<div class="center_title_bar">Lista de Produtos</div>
				<?php
				$i = 0;
				$j = 4;
				for ($i; $i < $j; $i++) {
					?>
					<div class="prod_box">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">            
							<div class="product_title"><a href="produto.php">Motorola 156 MX-VL</a></div>
							<div class="product_img"><a href="produto.php"><img src="produtos/laptop1.gif" alt="" title="" border="0" /></a></div>
							<div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>                        
						</div>
						<div class="bottom_prod_box"></div>             
						<div class="prod_details_tab">
							<a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]">
								<img src="images/cart.gif" alt="" title="" border="0" class="left_bt" />
							</a>
							<a href="produto.php" class="prod_details">detalhes</a>            
						</div>
					</div>
					<?php
				}
				?>
			</div>

			<?php montaCarrinho(); ?>

		</div>

		<?php montaRodape(); ?>

	</body>
</html>
