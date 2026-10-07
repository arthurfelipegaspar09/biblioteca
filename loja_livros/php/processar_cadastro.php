<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config.php';

$nome  = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($nome === '' || $email === '' || $senha === '') {
    $_SESSION['erro'] = 'Preencha todos os campos.';
    header('Location: cadastro.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['erro'] = 'E-mail inválido.';
    header('Location: cadastro.php');
    exit;
}

if (strlen($senha) < 6) {
    $_SESSION['erro'] = 'A senha deve ter pelo menos 6 caracteres.';
    header('Location: cadastro.php');
    exit;
}

if (buscarUsuarioPorEmail($email)) {
    $_SESSION['erro'] = 'Email já cadastrado.';
    header('Location: cadastro.php');
    exit;
}

criarUsuario($nome, $email, $senha);

$_SESSION['sucesso'] = 'Cadastro realizado! Você já pode entrar.';
header('Location: login.php');
exit;