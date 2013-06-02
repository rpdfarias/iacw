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
        <link rel="stylesheet" type="text/css" href="css/carrinho.css" />
        <script type="text/javascript" src="js/carrinho.js"></script>
    </head>
    <body>
        <div id="container">
            <?php
            montaTopo();
            montaMenuOpcoes();
            montaListaFabricantes();
            ?>

            <!--dados do carrinho-->
            <div class="center_content">
                <div class="titulo">Lista de Produtos</div>

                <div class="tb_head tb_descricao">Descrição</div>
                <div class="tb_head tb_excluir">Excluir</div>
                <div class="tb_head tb_quantidade">Quantidade</div>
                <div class="tb_head tb_valor">Valor</div>
                <div class="tb_head tb_total">Valor Total</div>

                <div class="mensagem">
                    Sua cesta de compras está vazia.
                </div>

                <div class="opcoes">
                    <input class="botoes" type="button" value="Esvaziar Carrinho" />
                    <input class="botoes" type="button" value="Atualizar Carrinho" />
                    <input class="botoes" type="button" value="Finalizar Pedido" onclick="finalizaPedido();" />
                </div>
            </div>

            <?php montaCarrinho() ?>

        </div>

        <?php montaRodape() ?>

    </body>
</html>
