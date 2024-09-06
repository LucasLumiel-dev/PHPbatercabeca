<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bater_cabeca</title>
    <meta name="authro" content="Lucas Macedo">
    <header><h1 align="center">PHP ativ</h1></header>
    <link rel="stylesheet" href="estiloexerci.css">
</head>
<body>
    <img src="c:\Users\023.928099\Downloads\skadi.gif">
    <h1>exercicio 1</h1>
    <form action="exercitation.php" method="post">
        <label>Qual idade tu tem? </label>
        <input type="text" name="valor1" required minlength="2">
        <br>
        <button type="submit" name="botao"> enviar </button>
        <a href="exercitation2.php">
            <button type="button">Próxima questão</button>
        </a>
    </form>

    <?php

    $idade = $_POST["valor1"] ?? null;
    
    if ($idade < 18 && !is_null($idade)) {

        echo "Mete o pé otaro";

    }
    elseif(!is_null($idade)) {

        echo "Cardastro fazido";
    }

    ?>
    
</body>
</html>