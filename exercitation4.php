<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bater_cabeca4</title>
    <meta name="authro" content="Lucas Macedo">
</head>
<body>
<header><h1 align="middle">PHP ativ</h1></header>
<h1>exercicio 4</h1>
    <form action="" method="post">
        <label for="numero">Insira um número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <button type="submit" name="botao">Verificar</button>
        <br>
        <a href="exercitation5.php"><button type="button">Proximo exercicio</button></a>
    </form>

    <?php
    if (isset($_POST['botao'])) {
        $numero = $_POST['numero'] ?? null;

        if (!is_null($numero) && is_numeric($numero)) {
            // Verificação se é par ou ímpar usando o operador %
            if ($numero % 2 == 0) {
                echo "<p>O número $numero é <strong>par</strong>.</p>";
            } else {
                echo "<p>O número $numero é <strong>ímpar</strong>.</p>";
            }
        } else {
            echo "<p>Por favor, insira um número válido.</p>";
        }
    }
    ?>
</body>
</html>
