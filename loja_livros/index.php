<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
    <forms method="POST">

        <h1>CADASTRO</h1>
        <label  for="usuario">Usuario: </label>
        <input type="text" id="usuario" name="usuario" required>



        <br><br>

        <label for="senha">Senha: </label>
        <input type="text" id="senha" name="senha" required>
        
        <br><br>
        <a href="./php/login.php">
            <button type="submit" name="acao">Entrar</button>
        </a>
        
    </forms>
</body>
</html>