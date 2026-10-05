<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    
    <forms method="POST">
        <div class="login">

        <h1>LOGIN</h1>
        <br>

        <label  for="usuario">Usuario: </label>
        <input type="text" id="usuario" name="usuario" required>



        <br><br>

        <label for="senha">Senha: </label>
        <input type="text" id="senha" name="senha" required>
        
        <br><br>

        <a href="../php/login.php">
        <button type="submit" name="acao">Entrar</button>
        </a>
        </div>
    </forms>



    

</body>
</html>