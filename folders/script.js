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

      // Função para aumentar a quantidade
      function aumentarQuantidade(aumentarquantidade) {
          var inputQuantity = document.getElementById("quantidade");
          quantidade = parseInt(inputQuantity.value);
          if (quantidade < 100) { // Limite máximo de 100 (pode ajustar conforme desejar)
              inputQuantity.value = quantidade + 1;
          }
      }
        // Função para diminuir a quantidade
        function diminuirQuantidade() {
            var inputQuantity = document.getElementById("quantidade");
            quantidade = parseInt(inputQuantity.value);
            if (quantidade > 1) { // Impede que a quantidade fique menor que 1
                inputQuantity.value = quantidade - 1;
            }
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
        // Função validar telefone
        var telefoneInput = document.getElementById("telefone");
        // Se o valor não atender à expressão regular definida no atributo "pattern"
        // Mostra uma mensagem de erro
        if (!isValid) {
        telefoneInput.setCustomValidity("Formato de telefone inválido");
          } else {
            telefoneInput.setCustomValidity("");
       }
