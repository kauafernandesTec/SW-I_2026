<?php
$menuItems = [
    ['titulo' => 'Inicio', 'link' => 'index.php'],
    ['titulo' => 'Sobre', 'link' => 'sobre.php'],
    ['titulo' => 'Experiencias', 'link' => 'experiencias.php'],
    ['titulo' => 'Projetos', 'link' => 'projetos.php'],
    ['titulo' => 'Contato', 'link' => 'contato.php']
];

function isActive($pagina) {
    return basename($_SERVER['PHP_SELF']) === $pagina ? 'active' : '';
}

$mensagemEnviada = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mensagem = htmlspecialchars($_POST['mensagem'] ?? '');
    if ($nome && $email && $mensagem) {
        $mensagemEnviada = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | Hollow Knight</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="index.php" class="logo">Knight</a>
            <ul class="nav-menu">
                <?php foreach ($menuItems as $item): ?>
                    <li><a href="<?php echo $item['link']; ?>" class="<?php echo isActive($item['link']); ?>"><?php echo $item['titulo']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main class="main">
        <section class="section">
            <h2>Contato</h2>
            
            <?php if ($mensagemEnviada): ?>
            <div class="message-success">Mensagem enviada com sucesso!</div>
            <?php endif; ?>
            
            <form method="POST" class="form">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Hollow Knight Theme</p>
    </footer>
</body>
</html>