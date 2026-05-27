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
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | Hollow Knight</title>
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
            <h2>Projetos</h2>
            <div class="card-grid">
                <?php
                $projetos = [
                    ['titulo' => 'Projeto 1', 'descricao' => 'Descricao do projeto 1', 'tags' => ['PHP', 'MySQL']],
                    ['titulo' => 'Projeto 2', 'descricao' => 'Descricao do projeto 2', 'tags' => ['JavaScript', 'React']],
                    ['titulo' => 'Projeto 3', 'descricao' => 'Descricao do projeto 3', 'tags' => ['Node.js', 'MongoDB']]
                ];
                foreach ($projetos as $projeto):
                ?>
                <div class="card">
                    <h3><?php echo $projeto['titulo']; ?></h3>
                    <p><?php echo $projeto['descricao']; ?></p>
                    <div class="tags">
                        <?php foreach ($projeto['tags'] as $tag): ?>
                        <span class="tag"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Hollow Knight Theme</p>
    </footer>
</body>
</html>