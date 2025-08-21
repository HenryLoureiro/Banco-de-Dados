<?php
$conn = new mysqli("localhost", "root", "", "sistema_simples");
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>
