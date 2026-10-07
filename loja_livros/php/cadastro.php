<?php
require_once 'config.php';


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WeCode | Criar Conta</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="card">
    <div class="tab">CRIAR CONTA</div>
    <div class="tab-underline"></div>

    
    <?php if (isset($_SESSION['erro'])): ?>
      <p style="color:#d33; text-align:center; margin-bottom:1rem; font-weight: bold;">
        <?php 
          echo htmlspecialchars($_SESSION['erro']); 
          unset($_SESSION['erro']); 
        ?>
      </p>
    <?php endif; ?>

    <form method="POST" action="processar_cadastro.php">
      <div class="field">
        <label for="nome">NOME</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
      </div>

      <div class="field">
        <label for="email">E-MAIL</label>
        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
      </div>

      <div class="field">
        <label for="senha">SENHA</label>
        <input type="password" id="senha" name="senha" placeholder="••••••••" required minlength="6">
      </div>

      <button type="submit" class="btn-acessar">CRIAR CONTA</button>
    </form>

    <hr class="divider">

    <div class="signup">
      Já tem uma conta? <a href="./login.php">Entrar</a>
    </div>
  </div>

  <footer>© 2026 Loja virtual</footer>

</body>
</html>