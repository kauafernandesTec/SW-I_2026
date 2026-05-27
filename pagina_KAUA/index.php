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
    <title>Inicio | Hollow Knight</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="index.php" class="logo-img"><img src="logo_knight.ico" style="width:60px; height:auto; alt=logo"></a>
            <ul class="nav-menu">
                <?php foreach ($menuItems as $item): ?>
                    <li><a href="<?php echo $item['link']; ?>" class="<?php echo isActive($item['link']); ?>"><?php echo $item['titulo']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <!-- BANNER -->
    <section class="banner">
        <img src="banner_knight.jpg" style="justify-content: center; height: 540px; alt= Banner">
    </section>

    <!-- HERO -->
    <section class="hero">
        <h1>Bem-vindo ao <span class="accent">Vazio</span></h1>
        <p>Explore as profundezas de Hallownest.</p>
        <a href="projetos.php" class="btn">Ver Projetos</a>
    </section>

    <!-- DESTAQUES -->
    <section class="section">
        <h2>Areas de Hallownest</h2>
        <div class="card-grid">
            <?php
            $destaques = [
                ['titulo' => 'Encruzilhada Esquecida', 'descricao' => 'O primeiro passo na jornada.'],
                ['titulo' => 'Cidade das Lagrimas', 'descricao' => 'O coracao de Hallownest.'],
                ['titulo' => 'O Abismo', 'descricao' => 'O lugar mais profundo de todos.']
            ];
            foreach ($destaques as $item):
            ?>
            <div class="card">
                <h3><?php echo $item['titulo']; ?></h3>
                <p><?php echo $item['descricao']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Hollow Knight - Criado por Kauã Fernandes Carvalho</p>
    </footer>
</body>
</html>