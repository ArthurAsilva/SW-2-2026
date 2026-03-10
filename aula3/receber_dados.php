<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receber</title>
    <style>
        .maior {
            color: gold;
            
        }
        .menor {
            color: red;
        }
    </style>
</head>
<body>
    
    <?php
    //$nome = $_POST['nome'];
    $nome = htmlspecialchars($_POST['nome']);
    $email = $_POST['email'];
    $idade = $_POST['idade'];    

    $ano_atual = date('Y');
    echo $ano_atual;
    
    //$ano = 2026; 
    $ano_nasc =  $ano_atual - $idade;
    ?>

    <p>Nome: <?php echo $nome; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Idade atual: <?php echo $idade; ?> anos</p>
    <p>Ano de nascimento: <?php echo $ano_nasc; ?></p>

    <?php
    if ($idade >= 18) {
        echo '<p class="maior">voce é maior de idade</p>';
    } else {
        echo '<p class="menor">voce é menor de idade  </p>';
    }
    ?>

</body>
</html>