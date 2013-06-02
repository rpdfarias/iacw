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
        <link rel="stylesheet" type="text/css" href="css/confirmacao_pedido.css" />		
    </head>
    <body>
        <div id="container">
            <?php
            montaTopo();
            montaMenuOpcoes();
            montaListaFabricantes();
            ?>

            <!--confirmacao do pedido-->
            <div class="center_content">
                <div class="titulo">Confirmação do Pedido</div>
                <div class="bloco">
                    <div class="linha">
                        <span class="confirmacao">Seu pedido foi registrado com sucesso e esta aguardando confirmação de pagamento</span>
                    </div>
                </div>

                <div class="titulo">Lista de Produtos</div>

                <div class="tb_head tb_descricao">Descrição</div>
                <div class="tb_head tb_excluir">Excluir</div>
                <div class="tb_head tb_quantidade">Quantidade</div>
                <div class="tb_head tb_valor">Valor</div>
                <div class="tb_head tb_total">Valor Total</div>

                <div class="mensagem">
                    Sua cesta de compras está vazia.
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
                </div>				

            </div>

            <?php montaCarrinho(); ?>

        </div>

        <?php montaRodape(); ?>

    </body>
</html>
