<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bater_cabeca2</title>
    <meta name="authro" content="Lucas Macedo">
</head>
<body>
<header><h1 align="center">PHP ativ</h1></header>
<h1>exercicio 2</h1>

    <form action="" method="post">
        <label for="nota">Insira a sua nota (0 a 10):</label>
        <input type="number" id="nota" name="nota" min="0" max="10" required>
        <br><br>
        <button type="submit" name="botao">Classificar</button>    
        <br>
        <a href="exercitation3.php">
            <button type="button">Próxima questão</button>
        </a>
    </form>

    <?php
    if (isset($_POST['botao'])) {
        $nota = $_POST['nota'] ?? null;

        if (!is_null($nota) && is_numeric($nota) && $nota >= 0 && $nota <= 10) {
            // Estrutura switch para classificar a nota
            switch (true) {
                case ($nota == 10):
                    echo "<p>A sua classificação é: <strong>A</strong></p>";
                    break;
                case ($nota == 9):
                    echo "<p>A sua classificação é: <strong>B</strong></p>";
                    break;
                case ($nota >= 7 && $nota <= 8):
                    echo "<p>A sua classificação é: <strong>C</strong></p>";
                    break;
                case ($nota >= 5 && $nota <= 6):
                    echo "<p>A sua classificação é: <strong>D</strong></p>";
                    break;
                case ($nota >= 0 && $nota <= 4):
                    echo "<p>A sua classificação é: <strong>E</strong></p>";
                    break;
                default:
                    echo "<p>Nota inválida.</p>";
            }
        } else {
            echo "<p>Por favor, insira uma nota válida entre 0 e 10.</p>";
        }
    }
    ?>

</body>
</html>