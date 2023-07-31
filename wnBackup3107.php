<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Gerar Números</title>
   <link rel="stylesheet" type="text/css" href="rifa.css">
   <script>
       function gerarNumerosAleatorios() {
    var quantidade = document.getElementById("quantidade").value;
     var valorUnitario = parseFloat(document.getElementById("valorUnitario").innerHTML);
        var numeros = [];
     var total = quantidade * valorUnitario; // Alteração na linha do cálculo do valor total
     for (var i = 0; i < quantidade; i++) {
    var numeroAleatorio = Math.floor(Math.random() * 100);
    numeros.push(numeroAleatorio * valorUnitario);
    }
     document.getElementById("numerosGerados").innerHTML = numeros.join(", ");
     document.getElementById("valorTotal").innerHTML = total.toFixed(2);
        }
    // Função para abrir a subtela
    function abrirSubtela() {
        var subtela = document.getElementById("subtela");
        subtela.style.display = "block";
    }
    
    // Função para fechar a subtela
    function fecharSubtela() {
        var subtela = document.getElementById("subtela");
        subtela.style.display = "none";
    } 

    // Função para abrir a subtela ao consultar números
    function AbrirSubtelaConsulta() {
        var subtelaconsulta = document.getElementById("subtelaconsulta");
        subtelaconsulta.style.display = "block";
    }
    
    // Função para fechar a subtela ao consultar números
    function fecharSubtelaconsulta() {
        var subtelaconsulta = document.getElementById("subtelaconsulta");
        subtelaconsulta.style.display = "none";   
    }

    // Function Galeria fotos
    var currentImageIndex = 0;
        var images = ['imagem1.jpg', 'imagem2.jpg', 'imagem3.jpg']; // Substitua com os URLs ou caminhos das suas imagens

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            document.getElementById('mainImage').src = images[currentImageIndex];
        }

        function showPrevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            document.getElementById('mainImage').src = images[currentImageIndex];
        }
</script>
<!--
<style>
body {
  align-items: center;
  margin: 0px;
  width: 100vw;
  height: 100vh;
  border: 20px;
  text-align: center;
  background-image: linear-gradient(to right, rgb(38, 39, 54), rgb(29, 96, 103));
}

#container {
  display: inline-block;
  color: #f6f6f6;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border: 2px solid #000000;
  padding: 50px;
}

.cabecalho,
.cabecalho_menu {
  background-color: #1a2a39;
  height: 50px;
  display: flex;
  justify-content: center;
}

.ulcabecalho {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  color: #000000;
}

.cabecalho_menu_item {
  margin: 0 10px;
}

a,
li {
  display: block;
  color: #ffffff;
  text-decoration: none;
  padding: 10px;
}

a:hover {
  background-color: #000000;
}

#barra-acoes {
  display: inline-block;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 10px;
}

#botao-pagamento , #botao-consulta {
  background-color: #1d9d34;
  color: rgb(248, 244, 244);
  border: none;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

label {
  font-weight: bold;
  margin-right: 10px;
}

input[type="number"] {
  width: 50px;
}

#numerosGerados,
#valorTotal {
  font-weight: bold;
}

.subtela, .subtelaconsulta {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(40, 29, 29, 0.5);
  z-index: 999;
}

.subtela-conteudo,
.inputuser,.subtela-conteudoconsulta {
  position: absolute;
  color: #1a2a39;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #d6d6d6;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(239, 237, 237, 0.5);
  max-width: 80%;
  max-height: 80%;
  overflow: auto;
  background-color: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  font-size: 15px;
  letter-spacing: 2px;
}
-->
</style>

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
        <div id="container">
        <div id="barra-acoes">
            <span>New Test !@#$%%¨ </span>
            <!--<div class="gallery"> -->
            <div class="arrow" onclick="showPrevImage()">&#8249;</div>
            <img src="imagem1.jpg" alt="Imagem 1" class="main-image" id="mainImage" onclick="openModal('imagem1.jpg')">
            <div class="arrow" onclick="showNextImage()">&#8250;</div>        
        </div>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" value="1">
        <br><br>
        <label for="valorUnitario">Valor Unitário:</label>
        <span id="valorUnitario">1</span>
        <br><br>
        <button onclick="gerarNumerosAleatorios()">Gerar Números</button>
    <br><br>

        <div>
            <!-- Elemento HTML para exibir a mensagem de erro -->
            <p id="mensagemErro" style="color: red; font-weight: bold;"></p>
        </div>
        <div>
            <label>Números Gerados:</label>
            <div id="numerosGerados"></div>
        </div>
        <div>
            <label>Valor Total:</label>
            <div id="valorTotal"></div>
        </div>
        <div>  
             <button id="botao-pagamento" onclick="abrirSubtela()">Pagar</button>
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
                    <input type="tel" id="telefone" name="telefone" class="inputUser" pattern="([0-9]{2} [0-9]{5}-[0-9]{4})" required
         placeholder="(99)99999-9999" size="15"/>
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
