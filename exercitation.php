<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bater_cabeca</title>
    <meta name="authro" content="Lucas Macedo">
    <header><h1>PHP ativ</h1></header>
</head>
<body>
    <h1>exercicio 1</h1>
    <form action="exercitation.php" method="post">
        <label>Qual idade tu tem?</label>
        <input type="text" name="valor1" required minlength="2">
        <br>
        <button type="submit" name="botao"> enviar </button>
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