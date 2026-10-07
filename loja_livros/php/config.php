<?php




if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION['infoSite'])) {
    $_SESSION['infoSite'] = [
        'nome_empresa' => 'Minha Empresa',
        'slogan'       => 'O melhor sistema para você',
        'contato'      => [
            'telefone' => '(11) 99999-9999',
            'email'    => 'contato@empresa.com'
        ]
    ];
}


if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [
        [
            'id'        => 1,
            'nome'      => 'Administrador',
            
            'email'     => 'admin@empresa.com',
            
            'senha'     => password_hash('admin123', PASSWORD_DEFAULT)
        ]
    ];
}


if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [
        [
            'id'        => 1,
            'nome'      => 'Produto A',
            'preco'     => 150.00,
            'descricao' => 'Descrição do primeiro produto.'
        ],
        [
            'id'        => 2,
            'nome'      => 'Produto B',
            'preco'     => 299.90,
            'descricao' => 'Descrição do segundo produto.'
        ]
    ];
}


function carregarUsuarios(): array {
    return $_SESSION['usuarios'] ?? [];
}


function salvarUsuarios(array $usuarios): bool {
    $_SESSION['usuarios'] = $usuarios;
    return true;
}


function buscarUsuarioPorEmail(string $email): ?array {
    $usuarios = carregarUsuarios();
    foreach ($usuarios as $usuario) {
        if (strtolower($usuario['email']) === strtolower($email)) {
            return $usuario;
        }
    }
    return null;
}


function criarUsuario(string $nome, string $email, string $senha): void {
    $usuarios = carregarUsuarios();

    $novoId = 1;
    foreach ($usuarios as $usuario) {
        if (isset($usuario['id']) && $usuario['id'] >= $novoId) {
            $novoId = $usuario['id'] + 1;
        }
    }

    $usuarios[] = [
        'id'    => $novoId,
        'nome'  => $nome,
        'email' => $email,
        'senha' => password_hash($senha, PASSWORD_DEFAULT),
    ];

    salvarUsuarios($usuarios);
}