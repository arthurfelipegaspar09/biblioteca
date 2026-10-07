<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config.php';

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($email === '' || $senha === '') {
    $_SESSION['erro'] = 'Preencha e-mail e senha.';
    header('Location: login.php');
    exit;
}

$usuario = buscarUsuarioPorEmail($email);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario_id']   = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];

    header('Location: ../inicio.html');
    exit;
} else {
    $_SESSION['erro'] = 'E-mail ou senha inválidos.';
    header('Location: login.php');
    exit;
}