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
        var images = ['imagem1.jpg', 'imagem2.jpg', 'imagem3.jpg',]; // Substitua com os URLs ou caminhos das suas imagens

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
      