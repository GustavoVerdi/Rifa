<?php
$servername = "localhost";
$username = "seu_usuario"; // Substitua com seu nome de usuário do MySQL
$password = "sua_senha"; // Substitua com sua senha do MySQL
$dbname = "seu_banco_de_dados"; // Substitua com o nome do seu banco de dados

// Crie uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Valor do Forms Cadastro
$telefone = $_POST['telefone']; // 
$email = $_POST['email'];
$nome = $_POST['nome'];
$cotas = $_POST['cotas'];

// Verifique se o telefone já está cadastrado
$verificar_sql = "SELECT * FROM TBVENDA WHERE telefone = '$telefone'";
$result = $conn->query($verificar_sql);

if ($result->num_rows > 0) {
    // O telefone já está cadastrado, então obtenha os dados do banco de dados
    $row = $result->fetch_assoc();
    $telefone = $row['telefone'];
    $nome = $row['Nome'];
    $email = $row['email'];
} else {
    // O telefone não está cadastrado, então insira os dados
    $sql = "INSERT INTO TBVENDA (numero, email, Nome, telefone) VALUES ('$telefone', '$email', '$nome', '$telefone')"; // Substituição de $numeros para $telefone

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>
