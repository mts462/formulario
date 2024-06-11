<?php

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "formulario-mateus"; 


    $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];


    $sql = "INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco)
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade','$estado', '$endereco')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

    $conn->close();
?>