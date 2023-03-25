<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$sql = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Usuário atualizado com sucesso!<br>";
    echo "<a href='index.php' class='btn btn-secondary'>Voltar</a>";
} else {
    echo "Erro ao atualizar usuário: " . $conn->error;
    echo "<a href='index.php' class='btn btn-secondary'>Voltar</a>";
}



$conn->close();
