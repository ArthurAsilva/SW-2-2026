<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="receber_dados.php" method="POST"> 
        <p>nome: <input type="text" name="nome"></p>
        <p>Email: <input type="email" name="email"></p>
        <p>idade: <input type="number" name="idade"></p>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>