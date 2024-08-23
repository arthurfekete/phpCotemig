<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("controller/FabricaConexao.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $sql = "SELECT * FROM clientes WHERE nome='$nome' AND cpf='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['nome'] = $nome;
        header("location: dashboard.php");
    } else {
        echo "Login inválido. Verifique suas credenciais.";
    }
}
?>
<!-- Formulário de Login -->
<form method="post" action="">
    Nome: <input type="text" name="nome"><br>
    CPF: <input type="text" name="cpf"><br>
    <input type="submit" value="Login">
</form>