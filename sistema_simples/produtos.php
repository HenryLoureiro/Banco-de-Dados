<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $conn->query("INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')");
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="assets/style.css"></head>
<body>
<div class="container">
    <h2>Cadastrar Produto</h2>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome do produto" required>
        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <input type="submit" value="Salvar">
    </form>

    <h3>Produtos Cadastrados</h3>
    <ul>
        <?php
        $res = $conn->query("SELECT * FROM produtos");
        while ($p = $res->fetch_assoc()) {
            echo "<li>{$p['nome']} - R$ {$p['preco']}</li>";
        }
        ?>
    </ul>
</div>
</body>
</html>
