<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

include('db_config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = $_POST['valor'];
    $forma = $_POST['forma'];
    $prazo = $_POST['prazo'];
    // Adicione os campos necessários

    $sql = "INSERT INTO pagamentos (valor, data, tipo) VALUES ('$valor', '$forma', '$prazo')";

    if ($conn->query($sql) === TRUE) {
        echo "Pagamento cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar pagamento: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Pagamentos</title>
</head>
<body>
    <h2>Cadastro de Pagamentos</h2>
    <form action="viewPagamentos.php" method="post">
        Forma: <input type="text" name="forma"><br>
        Prazo: <input type="date" name="prazo"><br>
        <!-- Adicione outros campos conforme necessário -->
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
