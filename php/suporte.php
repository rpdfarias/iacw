<?php
session_start();

//echo htmlspecialchars(SID);

if ($_GET['login'] == 1) {
	$_SESSION['usuario'] = $_GET['usuario'];
	$_SESSION['debug'] = $_GET['usuario'] == 'root' ? 1 : 0;
}

function getUsuario() {
	return $_SESSION['usuario'] == "" ?
					'Olá visitante, <a href="reguser.php">clique aqui</a> para se cadastrar.' :
					'Olá ' . $_SESSION['usuario'] . ', bem vindo ao site';
}

function montaTopo() {
	?>
	<!--boas vindas, consulta produto-->
	<div class="top_bar">
		<div class="left_content">
			<div id="hello">
				<?php
				echo getUsuario();
				?>
			</div>
		</div>
		<div class="top_search">
			<div class="search_text">Consulta Produto</div>
			<input type="text" class="search_input" name="search" />
			<input type="image" src="images/top_search.gif" class="search_bt" />
		</div>
	</div>
	<?php
}

function getLogin() {
	return $_SESSION['usuario'] == "" ?
					'<li><a href="login.php" class="nav2">Login</a></li>' :
					'<li><a href="index.php?login=1" class="nav2">Logout</a></li>';
	//<li><a href="login.php" class="nav2">Login\Logout</a></li>
}

function getMeuCadastro() {
	return $_SESSION['usuario'] == "" ?
					'<li><a href="login.php?redirect=true" class="nav3">Meu Cadastro</a></li>' :
					'<li><a href="confirmreguser.php" class="nav3">Meu Cadastro</a></li>';
	//<li><a href="confirmreguser.php" class="nav3">Meu Cadastro</a></li>
}

function montaMenuOpcoes() {
	?>
	<!--menu de opções-->
	<div id="menu_tab">
		<div class="left_menu_corner"></div>
		<ul class="menu">
			<li><a href="index.php" class="nav1">Home</a></li>
			<li class="divider"></li>
			<?php
			echo getLogin();
			echo '<li class="divider"></li>';
			echo getMeuCadastro();
			?>
			<li class="divider"></li>
			<?php
			if (($_SESSION['usuario'] == "admin") or ($_SESSION['usuario'] == "root")) {
				?>
				<li><a href="central_controle.php" class="nav4">Central de Controle</a></li>
				<li class="divider"></li>
				<?php
			}
			?>
		</ul>				
		<div class="right_menu_corner"></div>
	</div>	
	<?php
}

function montaListaFabricantes() {
	?>
	<!--lista dos fabricantes-->
	<div class="left_content">
		<div class="title_box">Fabricantes</div>
		<ul class="left_menu">
			<?php
			$i = 0;
			$j = 6;
			for ($i = 0; $i < $j; $i++) {
				if (($i % 2) == 0) {
					echo '<li class="odd"><a href="services.html">' . $i . '</a></li>';
				} else {
					echo '<li class="even"><a href="services.html">' . $i . '</a></li>';
				}
			}
			?>
		</ul>

		<?php
		if ($_SESSION["debug"] == 1) {
			?>	

			<div class="title_box">Cadastros</div>
			<ul class="left_menu">
				<li class="odd"><a href="regendereco.php">Registro Endereço</a></li>
				<li class="even"><a href="regfabricante.php">Registro Fabricante</a></li>
				<li class="odd"><a href="regproduto.php">Registro Produto</a></li>
				<li class="even"><a href="reguser.php">Registro Usuário</a></li>
			</ul>		
			<?php
		}
		?>
	</div>
	<?php
}

function montaCarrinho() {
	?>
	<!--carrinho-->
	<div class="right_content">
		<div class="shopping_cart">
			<div class="cart_title">Meu Carrinho</div>
			<div class="cart_details">
				3 items <br />
				<span class="border_cart"></span>
				Total: <span id="cart_price">350$</span>
			</div>
			<div class="cart_icon">
				<a href="carrinho.php" title="header=[Checkout] body=[&nbsp;] fade=[on]">
					<img src="images/cart_shopping.png" alt="" title="" width="48" height="48" border="0" />
				</a>
			</div>
		</div>

		<?php
		if ($_SESSION["debug"] == 1) {
			?>		 
			<div class="title_box">Relatórios</div>
			<ul class="left_menu">
				<li class="odd"><a href="relatorio_cliente.php">Relatório Cliente</a></li>
				<li class="even"><a href="relatorio_fabricante.php">Relatório Fabricante</a></li>
				<li class="odd"><a href="relatorio_periodo.php">Relatório Período</a></li>			
				<li class="even"><a href="buscacli.php">Busca Cliente</a></li>
				<li class="odd"><a href="buscafab.php">Busca Fabricante</a></li>
				<li class="even"><a href="buscapedido.php">Busca Pedido</a></li>
				<li class="odd"><a href="buscaprod.php">Busca Produto</a></li>			
			</ul>
			<?php
		}
		?>
	</div>

	<?php
	montaPush();
}

function montaPush() {
	?>
	<!--push para o rodape-->
	<div id="push">
	</div>	
	<?php
}

function montaRodape() {
	?>
	<!--rodape-->
	<div id="footer">
		<div class="left_footer">
		</div>
		<div class="center_footer">
			Todos os Direitos Reservados 2013
			<a href="http://csscreme.com/freecsstemplates/" title="free templates">
				<img src="images/csscreme.jpg" alt="free templates" title="free templates" border="0" />
			</a>
		</div>
		<div class="right_footer">
			<a href="index.php">home</a>
		</div>			
	</div>
	<?php
}
?>
