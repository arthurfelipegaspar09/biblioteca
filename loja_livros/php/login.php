<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LIVRARIA</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>

  <div class="login">
    <div class="tab">ENTRAR</div>
    <div class="tab-underline"></div>

    
    <?php if (!empty($_SESSION['erro'])): ?>
      <p style="color:#d33; text-align:center; margin-bottom:1rem; font-weight: bold;">
        <?php 
          echo htmlspecialchars($_SESSION['erro']); 
          unset($_SESSION['erro']);
        ?>
      </p>
    <?php endif; ?>

    
    <?php if (!empty($_SESSION['sucesso'])): ?>
      <p style="color:#2a2; text-align:center; margin-bottom:1rem; font-weight: bold;">
        <?php 
          echo htmlspecialchars($_SESSION['sucesso']); 
          unset($_SESSION['sucesso']);
        ?>
      </p>
    <?php endif; ?>

    <form method="POST" action="processar_login.php">
      
        <label for="email">E-MAIL</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      
        <label for="senha">SENHA</label>
        <input type="password" id="senha" name="senha" placeholder="••••••••" required>
      
      <button type="submit" class="btn-acessar">ACESSAR</button>
      
    </form>

    <div class="esquece_senha">
      <a href="#">ESQUECEU A SENHA?</a>
    </div>

    <hr class="divider">

    <div class="signup">
      Não tem uma conta? <a href="./cadastro.php">Criar agora</a>
    </div>
  </div>

</body>
</html>