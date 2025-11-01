<?php
interface Autenticavel {
    public function login(string $usuario, string $senha): bool;
}

class Usuario implements Autenticavel {
    private string $usuario = "admin";
    private string $senha = "1234";

    public function login(string $usuario, string $senha): bool {
        return $usuario === $this->usuario && $senha === $this->senha;
    }
}

// Processa o formulário
$mensagem = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $u = new Usuario();
    if ($u->login($usuario, $senha)) {
        $mensagem = "Login bem-sucedido!";
    } else {
        $mensagem = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login com Interface</title>
</head>
<body>
    <h1>Autenticação</h1>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Entrar">
    </form>

    <?php if ($mensagem): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>
</body>
</html>















