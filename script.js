   function calcularValorTotal(idQuantidade, idValorUnitario) {
          var inputQuantidade = document.getElementById(idQuantidade);
          var quantidade = parseInt(inputQuantidade.value);
      

          var spanValorUnitario = document.getElementById(idValorUnitario);
          var valorUnitario = parseFloat(spanValorUnitario.innerText);

          var valorTotal = quantidade * valorUnitario;

          var divValorTotal = document.getElementById("valorTotal");
          divValorTotal.innerText = valorTotal.toFixed(2);
        }
        var quantidade = 1; // Inicializa a quantidade com 1 (pode ajustar conforme desejar)

        function atualizarQuantidade(quantidadeAdicional) {
            var inputQuantidade = document.getElementById("quantidade");
            var novaQuantidade = parseInt(inputQuantidade.value) + quantidadeAdicional;
        
            if (novaQuantidade < 1) {
                novaQuantidade = 1;
            } else if (novaQuantidade > 1000) { //NÚMERO TOTAL DE NÚMEROS
                novaQuantidade = 1000;   //NÚMERO TOTAL DE NÚMEROS TEM QUER SER O MESMO QUE O DE CIMA
            }
        
            inputQuantidade.value = novaQuantidade;
            calcularValorTotal("quantidade", "valorUnitario");
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
        var images = ['./imagem/imagem1.jpg', './imagem/imagem2.jpg', './imagem/imagem3.jpg',]; // Substitua com os URLs ou caminhos das suas imagens

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            document.getElementById('mainImage').src = images[currentImageIndex];
        }

        function showPrevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            document.getElementById('mainImage').src = images[currentImageIndex];
        }
        // Função validar telefone
        var telefoneInput = document.getElementById("telefone");
        // Se o valor não atender à expressão regular definida no atributo "pattern"
        // Mostra uma mensagem de erro
        if (!isValid) {
        telefoneInput.setCustomValidity("Formato de telefone inválido");
          } else {
            telefoneInput.setCustomValidity("");
       }

       function verificarNumero() {
        var numero = document.getElementById("numero").value;
        
        // Simulação: Verificar se o número já está cadastrado
        var numeroCadastrado = false; // Troque para 'false' se o número não estiver cadastrado
      
        var nomeInput = document.getElementById("nome");
        var emailInput = document.getElementById("email");
      
        if (numeroCadastrado) {
          nomeInput.disabled = false;
          emailInput.disabled = false;
        } else {
          nomeInput.value = "";
          emailInput.value = "";
          nomeInput.disabled = true;
          emailInput.disabled = true;
        }
      }

      function realizarCheckout() {
          var numero = document.getElementById('numero').value;
          
          
          // Simular geração do QR Code Pix
          var qrCodeUrl = "qrcode.jpg";
          
          document.getElementById('qr-code').src = qrCodeUrl;
          document.getElementById('pix-instrucoes').style.display = 'block';
      }
      const backdrop = document.getElementById("backdrop");

backdrop.addEventListener("click", (event) => {
	closeModal();
});
function copiarTexto() {
  var campoTexto = document.getElementById("meuCampo");
  campoTexto.select();
  
  try {
      navigator.clipboard.writeText(campoTexto.value);
      alert("Texto copiado: " + campoTexto.value);
  } catch (err) {
      console.error("Erro ao copiar o texto: ", err);
  }
}

function realizarCheckout() {
  // Recupere o valor do campo de telefone
  var telefone = document.getElementById("telefone").value;

  // Crie uma instância do objeto XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Defina a função de retorno de chamada para manipular a resposta do servidor
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // Verifique a resposta do servidor
          var response = xhr.responseText;
          if (response === "cadastro_existente") {
              // O telefone já está cadastrado, você pode atualizar os campos de nome e e-mail se necessário
              document.getElementById("nome_completo").readOnly = true;
              document.getElementById("email").readOnly = true;
          } else {
              // O telefone não está cadastrado, permita ao usuário preencher nome e e-mail
              document.getElementById("nome_completo").readOnly = false;
              document.getElementById("email").readOnly = false;
          }
      }
  };

  // Abra uma solicitação POST para verificar_cadastro.php (ou outra URL correspondente)
  xhr.open('POST', 'verificar_cadastro.php', true);

  // Defina o cabeçalho da solicitação
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  // Envie a solicitação com os dados do telefone
  xhr.send('telefone=' + telefone);
}