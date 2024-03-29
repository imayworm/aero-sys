<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <title>Aeropartes Brazil</title>
    <link rel="stylesheet" type="text/css" href="css/estilo-geral.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/media-query.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/estilo-tabela.css"/>


</head>
<body>

    <header class="menu">
        <img class="icone" src="imagens/aero-150.png" alt="aeropartes-logo" usemap="#button-home">
        <map name="button-home">
            <area shape="rect" coords="0,129,127,1" alt="logo-aeropartes" href="index.html">
        </map>

        <!--
        usuarios
        master > desenvolvedor
        vendas > acesso à pn, foto, editar sem ir pra pendencia, preco, cotacao.
        estoque > acesso à pn, foto, editar sem ir pra pendencia, preco, cotacao, entrada em lote,
        sair -->
        <nav>
            <ul class="menu-interno">
                <li><button onclick="darkMode()" id="button-dark">DARK</button></li>
                <li><a href="usuarios-list.html" target="_self">USUÁRIOS</a></li>
                <li><a href="login.html" target="_self">SAIR</a></li>
            </ul>
        </nav>
    </header>


    <section class="interface">

        <div  class="sub-int" id="produto-box">
            <header class="prod-bar">
                <nav class="menu-produto">
                    <select id="lista-busca">
                        <option value="PRODUTO" selected>PRODUTO</option>
                        <option value="LOCAL">LOCAL</option>
                        <option value="TRACE">TRACE</option>

                    </select>
                    <input type="search" name="tBuscar-prod" ID="cBuscar-prod" size="50" maxlength="40" max="40"
                           autofocus autocapitalize="characters" placeholder="Digite o PN">
                    <button type="submit" class="button" id="but-submit"> IR</button>
                    <button class="button"><a href="add-prod.html" target="_self">+ </a></button>
                    <button class="button"><a href="produtos-list.html" target="_self" >MAX</a> </button>
                    
                    <!--<script>
                        function {
                            onclick
                            funçao para buscar no bd e selecionar de acordo com o campo
                        }

                    </script>   -->
                </nav>

            </header>
            <div id="container">
                <table class="listagem">
                    <tr>
                        <th>Part Number</th>
                        <th>Alternativo</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Condição</th>
                        <th>Lista</th>
                        <th>Edit</th>
                        <th>Foto</th>
                    </tr>
                    <?php
                    require_once "includes/busca_bd.php";
                    ?>
                    <?php
                    $busca = $banco->query("select * from produtos");
                    if (!$busca) {
                        echo "<tr><td>Infelizmente a busca deu errado</tr>";
                    } else {
                        if ($busca->num_rows == 0) {
                            echo "<tr><td>Nenhum registro encontrado";
                        } else {
                            while ($reg = $busca->fetch_object()) {//fetch pega todos os dados e faz caber em outro objeto
                                echo "<tr><td>$reg->PARTNUMBER<td>$reg->ALTERNATIVO<td>$reg->DESCRICAO<td>$reg->CONDICAO<td>$reg->LISTA";
                            }
                        }
                    }


                    ?>

                    <tr>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>Y</td>
                        <td>EDIT</td>
                        <td>Y</td>
                    </tr>
                    <tr>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>Y</td>
                        <td>EDIT</td>
                        <td>Y</td>
                    </tr>
                    <tr>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>exemplo</td>
                        <td>Y</td>
                        <td>EDIT</td>
                        <td>Y</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- <div class="sidebar"> -->


        <div class=" sub-int pendencia-box">
            <header class="sidebar">
                <nav class="menu-produto">

                    <p>PENDENCIA</p>
                    <button class="button"><a href="pendencia.html" target="_self">MAX</a></button>
                </nav>
            </header>
            <table>
                <tr>
                    <th>Part Number</th>
                    <th>Alternativo</th>
                    <th>Descrição</th>

                </tr>
                <tr>
                    <td>exemplo</td>
                    <td>exemplo</td>
                    <td>exemplo</td>

                </tr>
            </table>

        </div>

        <div class="sub-int cotacao-box">
            <header class="sidebar">
                <nav class="menu-produto">
                    <p>COTAÇÃO</p>
                    <button class="button"><a href="cotacao-list.html" target="_self">MAX</a></button>
                </nav>

            </header>


            <table>
                <tr>
                    <th>Part Number</th>
                    <th>Alternativo</th>
                    <th>Descrição</th>

                </tr>
                <tr>
                    <td>exemplo</td>
                    <td>exemplo</td>
                    <td>exemplo</td>

                </tr>
            </table>

        </div>


    </section>

    <!--<footer id="rodape">
        <p>Copyright &copy; 2022 - by Izabela Mayworm<br/>
            <a href="https://github.com/imayworm" target="_blank">GitHub</a> |
            <a href="" target="_blank"> Twitter</a></p>
    </footer>-->

    <!--<script src="dark-mode.js"></script>-->
    <script>
    function darkMode(){
        var botao = document.querySelector('button#button-dark')
        var interface_tela = document.querySelector('div#produto-box')
        var pendencia = document.querySelector('div.pendencia-box')
        var cotacao = document.querySelector('div.cotacao-box')
        interface_tela.style.background = 'black'
        interface_tela.style.color = 'white'
        pendencia.style.background = 'black'
        pendencia.style.color = 'white'
        cotacao.style.background = 'black'
        cotacao.style.color = 'white'
        botao.innerHTML = 'LIGHT'

    }
    </script>

</body>
</html>
