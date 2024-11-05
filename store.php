<?php
 
//  variavel -esta incluindo a pagina de conexao
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $nome = $_POST['nome']; // Recebe o nome
    $email = $_POST['email']; // Recebe o email
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida /conn =conexao
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}



?>