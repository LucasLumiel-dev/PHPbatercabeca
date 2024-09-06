<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="authro" content="Lucas Macedo">
    <title>Bater_cabeca3</title>
</head>

<body>
<header><h1 align="middle">PHP ativ</h1></header>
<h1>exercicio 3</h1>
    <form action="" method="post"> <!-- Mantém na mesma página após envio -->
        <label for="valor1">Valor 1:</label>
        <input type="text" id="valor1" name="valor1" required minlength="1">
        <br>
        <label for="valor2">Valor 2:</label>
        <input type="text" id="valor2" name="valor2" required minlength="1">
        <br>
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br>
        <button type="submit" name="botao">Calcular</button>
        <br>
        <a href="exercitation4.php"> 
            <button type="button">Proxima exercicio</button>
        </a>
    </form>
    
    <?php
    if (isset($_POST["botao"])) {
        $valor1 = $_POST["valor1"] ?? '';
        $valor2 = $_POST["valor2"] ?? '';
        $operacao = $_POST["operacao"] ?? '';

        if (is_numeric($valor1) && is_numeric($valor2)) {
            switch ($operacao) {
                case "adicao":
                    $resultado = $valor1 + $valor2;
                    echo "<p>Resultado da adição: $resultado</p>";
                    break;
                case "subtracao":
                    $resultado = $valor1 - $valor2;
                    echo "<p>Resultado da subtração: $resultado</p>";
                    break;
                case "multiplicacao":
                    $resultado = $valor1 * $valor2;
                    echo "<p>Resultado da multiplicação: $resultado</p>";
                    break;
                case "divisao":
                    if ($valor2 != 0) {
                        $resultado = $valor1 / $valor2;
                        echo "<p>Resultado da divisão: $resultado</p>";
                    } else {
                        echo "<p>Erro: Divisão por zero não é permitida.</p>";
                    }
                    break;
                default:
                    echo "<p>Operação inválida.</p>";
            }
        } else {
            echo "<p>Por favor, insira valores numéricos válidos.</p>";
        }
    } else {
        echo "<p>Nada foi enviado ainda.</p>";
    }
    ?>
</body>

</html>
