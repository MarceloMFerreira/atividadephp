<!DOCTYPE html>
<html>

<head>
    <title>Editar Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inclusão do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Editar Usuário</h1>
        <?php
        include 'conexao.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM usuarios WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nome = $row['nome'];
                $email = $row['email'];
                $telefone = $row['telefone'];

                echo "<form action='editar.php' method='post'>";
                echo "<input type='hidden' class='form-control' id='id' name='id' value='$id' required>";
                echo "<div class='form-group'>";
                echo "<label for='nome'>Nome:</label>";
                echo "<input type='text' class='form-control' id='nome' name='nome' value='$nome' required>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='email'>Email:</label>";
                echo "<input type='email' class='form-control' id='email' name='email' value='$email' required>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='telefone'>Telefone:</label>";
                echo "<input type='tel' class='form-control' id='telefone' name='telefone' value='$telefone' required>";
                echo "</div>";
                echo "<button type='submit' class='btn btn-primary'>Salvar</button>";
                echo "</form>";
            } else {
                echo "<p>Usuário não encontrado.</p>";
            }
        } else {
            echo "<p>ID do usuário não informado.</p>";
        }

        $conn->close();
        ?>
    </div>

    <!-- Inclusão do JS do Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>