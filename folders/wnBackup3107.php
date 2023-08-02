<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>TESTE WORK</title>
   <link rel="stylesheet" type="text/css" href="rifa.css">
   <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <header>          
    </header>
    <nav class="cabecalho_menu">
            <ul class="ulcabecalho">
                <li><a class="cabecalho_menu_item" href="#wnBackup.php">Início</a></li>
                <li><a class="cabecalho_menu_item" href="#">Sorteios</a></li>
                <li><a class="cabecalho_menu_item" href="#">Contato</a></li>
              </ul>
        </nav>
        </div>
        <br>
        <div id="container">
        <div id="barra-acoes">
            <span>New Test !@#$%%¨ </span>
            <div id="galleryContainer">
                <div class="arrow arrow-left" onclick="showPrevImage()">&#8249;</div>
                <img src="imagem1.jpg" alt="Imagem 1" class="main-image" id="mainImage" onclick="openModal('imagem1.jpg')">
                <div class="arrow arrow-right" onclick="showNextImage()">&#8250;</div>        
            </div>
        <br>
        <div id="quantityContainer">
        <label for="quantidade" id="quantityLabel">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" value="1" oninput="calcularValorTotal('quantidade', 'valorUnitario')">
        <button oninput="aumentarQuantidade('aumentarquantidade')"id="aumentarquantidade">+</button>
        <button id="diminuirQuantidade">-</button>
        </div>
        <br><br>
        <div id="valorUnitarioContainer">
        <label for="valorUnitario" id="valorUnitarioLabel">Valor da Cota:</label>
        <span id="valorUnitario">0.49</span>
    <br>
        <div>
            <!-- Elemento HTML para exibir a mensagem de erro -->
            <p id="mensagemErro" style="color: red; font-weight: bold;"></p>
        </div>
        <div id="numerosocultar">
            <div id="numerosGerados"></div>
        </div>
        <div>
            <label>Valor Total:</label>
            <div id="valorTotal"></div>
        </div>
        <div>  
             <button id="botao-pagamento" onclick="abrirSubtela()">Efetuar</button>
        </div>	
        <div>
            <button id="botao-consulta" onclick="AbrirSubtelaConsulta()">Consultar Números</button>
        </div>
      <div class="subtela" id="subtela">
		<div class="subtela-conteudo">
			<form action="rifa.php" method="POST">
                <fieldset>
                <br>   
                <div >
                <label for="nome_completo">Nome Completo:</label>
                <br> 
                <input type="text" id="nome_completo" name="nome_completo" class="inputUser" required>
                    </div>
                <br><br>
                <div>
                <label for="telefone">Telefone:</label>
                  <br> 
                <input type="text" id="telefone" name="telefone" required placeholder="(99)99999-9999" maxlength="15" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        <span class="validity"></span>
                </div>
                <br><br>
                <div>
                    <label for="email">E-mail:</label>
                    <br> 
                    <input type="email" id="email" name="email" class="inputUser" required >
                </div>    
                <br><br>
            <input type="submit" name="submit" id="subtmit" value="Efetuar Comprar">
			<button onclick="fecharSubtela()">Fechar</button>
		</div>
    </div>
    <div class="subtelaconsulta" id="subtelaconsulta">
		<div class="subtela-conteudoconsulta">
			<form action="consulta.php" method="POST">
                <fieldset>
                <br>   
                <div >
                    <label for="telefoneConsulta">Número de Telefone:</label>
                    <br>
                    <input type="tel" id="telefoneConsulta" name="telefoneConsulta" class="inputUser" required>
                </div>    
                <br><br>
            <input type="submit" name="submit" id="subtmitConsulta" value="Consultar Números">
            <button id="botao-fechar-consulta" onclick="fecharSubtelaconsulta()">Fechar</button>
        </div>
    </div>
</body>
</html>
