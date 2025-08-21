<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="assets/style.css"></head>
<body>
<div class="container">
    <h2>Bem-vindo!</h2>
    <p><a href="produtos.php">Cadastrar Produtos</a></p>
    <p><a href="logout.php">Sair</a></p>
</div>
</body>
</html>
