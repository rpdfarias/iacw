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
		<link rel="stylesheet" type="text/css" href="css/produto.css" />
	</head>
	<body>
		<div id="container">
			<?php
			montaTopo();
			montaMenuOpcoes();
			montaListaFabricantes();
			?>

			<!--detalhes do produto-->
			<div class="center_content">				

				<div class="center_title_bar">Motorola 156 MX-VL</div>

				<div class="prod_box_big">
					<div class="top_prod_box_big"></div>
					<div class="center_prod_box_big">
						<div class="product_img_big">							
							<a href="#">
								<img src="produtos/laptop1.gif" alt="" title="" border="0" />
							</a>
						</div>						
						<div class="details_big_box">
							<div class="product_title_big">Fabricante, Nome do Modelo, Resumo da Especificação, ETC</div>
							<div class="specifications">
								<input class="botoes" type="button" value="Comprar" />
							</div>
							<div class="prod_price_big">Preço: <span class="reduce">350$</span> <span class="price">270$</span></div>
							<a href="#" class="addtocart">Carrinho</a>
						</div>
						<div class="detail_text">
							1. Dual Chip, integra as vidas pessoais e profissionais<br>
							2. Smartphone Android 4.1 + milhares de jogos e aplicativos para download<br>
							3. Tela de 5" permite a melhor experiência de navegação na internet e de multimídia<br>
							<br>
							Este aparelho funciona em qualquer REGIÃO DO BRASIL, exclusivamente em <br>
							operadoras que funcionam com tecnologia GSM e pode ser habilitado com <br>
							Chip Pós Pago ou Pré Pago. Para o funcionamento deste aparelho é <br>
							necessário o uso do Chip (SIM Card) que não vai incluso na compra do <br>
							produto.<br>
							<br>
							Características Gerais<br>
							- Android Browser<br>
							- Android 4.1<br>
							- Tela Full Touch<br>
							- Agenda de compromissos<br>
							- Agenda telefônica <br>
							- Alarme/despertador<br>
							- Alerta vibratório<br>
							- Calculadora<br>
							- Calendário<br>
							- Cronômetro<br>
							- Hora mundial<br>
							- Viva-voz<br>
							- Registro de chamadas discadas, recebidas e não atendidas.<br>
							<br>

							Conectividade e Sincronização<br>
							- Processador Dual Core 1.2 Ghz<br>
							- SMS e MMS<br>
							- Bluetooth 3.0<br>
							- USB versão 2.0<br>
							- Wi-fi (wlan 802.11 b/g/n) <br>
							- E-mail e internet 3G<br>
							- GPS/A-GPS<br>
							- Loja de aplicativos Google Play<br>
							<br>

							Display<br>
							- Display principal/interno 5”<br>
							- Tamanho: 800 x 480<br>
							- Colorido (número de cores: 16 M)<br>
							- Tela tft<br>
							- Tela touch screen<br>
							<br>
							Câmera<br>
							- Resolução: 8.0 megapixels<br>
							- Zoom digital: 4x<br>
							- Camêra Secundária: 2.0 megapixels<br>
							- Efeitos de foto<br>
							- Flash<br>
							- Vídeo <br>
							<br>

							Som e Música<br>
							- Toques MP3<br>
							- Rádio FM<br>
							- MP3 Player<br>
							<br>

							Frequências<br>
							- GSM:
							850 / 900 / 1800 / 1900<br>
							- 3G:<br>
							HSDPA 850 / 1900 / 2100<br><br>

							Bateria<br>
							Bateria: 2100 mah<br>
							Duração em conversação: 17h<br>
							Duração em stand-by: 33 dias<br>
							* Os tempos de operação da bateria são estimados apenas e dependem de uma variedade de condições.<br><br>

							Dimensões: 14,4 x 7,7 x 0,96 cm (LxAxP)<br><br>

							Peso: 162g<br><br>

							Conteúdo da Embalagem<br>
							- Bateria<br>
							- Carregador<br>
							- Aparelho<br>
							- Cabo USB<br>
							- Fone de Ouvido<br><br>

							Garantia: 12 meses<br>
						</div>						
					</div>
					<div class="bottom_prod_box_big"></div>
        </div>
			</div>

			<?php montaCarrinho(); ?>

		</div>

		<?php montaRodape(); ?>

	</body>
</html>