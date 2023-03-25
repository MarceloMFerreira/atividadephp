<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Inclusão do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">BuscarUsuário</h1>
        <?php

        include 'conexao.php';

        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'>";
            echo "<thead><tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th></tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telefone"] . "</td>";
                echo "<td><a href='editar_usuario.php?id=" . $row["id"] . "' class='btn btn-primary'>Editar</a></td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Nenhum usuário cadastrado.</p>";
        }

        $conn->close();
        ?>
    </div>

    <!-- Inclusão do JS do Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

    </script>
</body>

</html>