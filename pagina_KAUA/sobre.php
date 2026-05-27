<?php
$menuItems = [
    ['titulo' => 'Inicio', 'link' => 'index.php'],
    ['titulo' => 'Historia', 'link' => 'sobre.php'],
    ['titulo' => 'Personagens', 'link' => 'experiencias.php'],
    ['titulo' => 'Regioes', 'link' => 'projetos.php'],
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
    <title>Historia | Hollow Knight</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estiloo.css">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="index.php" class="logo">Hollow Knight</a>
            <ul class="nav-menu">
                <?php foreach ($menuItems as $item): ?>
                    <li><a href="<?php echo $item['link']; ?>" class="<?php echo isActive($item['link']); ?>"><?php echo $item['titulo']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main class="main">
        <section class="section">
            <h2>A Historia de Hallownest</h2>
            
            <div class="story-content">
                <div class="story-chapter">
                    <h3>A Era da Luz</h3>
                    <p>Antes de Hallownest existir, os insetos viviam sob o dominio da Radiance, uma divindade ancestral de luz pura. Ela concedia aos insetos uma mente coletiva, unindo-os atraves de sonhos compartilhados. Nao havia individualidade, apenas a luz eterna.</p>
                </div>

                <div class="story-chapter">
                    <h3>A Chegada do Pale King</h3>
                    <p>O Pale King, um Wyrm superior, chegou as terras e ofereceu aos insetos algo novo: consciencia individual. Muitos abandonaram a Radiance para seguir este novo deus, e assim nasceu o grandioso reino de Hallownest. A Radiance, esquecida, foi selada no Reino dos Sonhos.</p>
                </div>

                <div class="story-chapter">
                    <h3>A Idade de Ouro</h3>
                    <p>Sob o governo do Pale King e da White Lady, Hallownest prosperou. A Cidade das Lagrimas tornou-se o centro da civilizacao, com suas torres elegantes e chuva eterna. Os Cinco Grandes Cavaleiros protegiam o reino, e a paz reinava nas profundezas.</p>
                </div>

                <div class="story-chapter">
                    <h3>O Retorno da Infeccao</h3>
                    <p>Mas a Radiance nao foi verdadeiramente esquecida. Ela comecou a se manifestar nos sonhos dos insetos, espalhando uma praga de luz alaranjada. Os infectados perdiam suas mentes, tornando-se cascas violentas. O reino comecou a ruir.</p>
                </div>

                <div class="story-chapter">
                    <h3>O Recipiente Vazio</h3>
                    <p>Desesperado, o Pale King criou os Vessels - seres nascidos do vazio, sem mente, sem vontade, sem voz. O objetivo era criar um recipiente perfeito para conter a Radiance. O Hollow Knight foi escolhido e selado no Templo do Ovo Negro, mas a contencao falhou.</p>
                </div>

                <div class="story-chapter">
                    <h3>O Cavaleiro Chega</h3>
                    <p>Anos depois, um pequeno Vessel emerge do Abismo e chega a Dirtmouth. Sem memorias de seu passado, ele desce as ruinas de Hallownest. Seu destino: enfrentar a Radiance e decidir o futuro do reino - seja destruindo-a, tornando-se o novo selo, ou transcendendo para algo maior.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <h2>Conceitos Importantes</h2>
            <div class="card-grid">
                <?php
                $conceitos = [
                    [
                        'titulo' => 'O Vazio',
                        'descricao' => 'Substancia primordial encontrada no Abismo. E a ausencia de luz e pensamento, usado pelo Pale King para criar os Vessels.'
                    ],
                    [
                        'titulo' => 'Soul',
                        'descricao' => 'Energia vital presente em todos os seres de Hallownest. Pode ser coletada e usada para feiticos e cura.'
                    ],
                    [
                        'titulo' => 'A Infeccao',
                        'descricao' => 'Manifestacao da vontade da Radiance. Aparece como luz alaranjada brilhante e consome a mente dos insetos.'
                    ],
                    [
                        'titulo' => 'Dream Nail',
                        'descricao' => 'Arma sagrada das Moth Tribe que permite entrar nos sonhos e ler os pensamentos mais profundos.'
                    ]
                ];
                foreach ($conceitos as $conceito):
                ?>
                <div class="card">
                    <h3><?php echo $conceito['titulo']; ?></h3>
                    <p><?php echo $conceito['descricao']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Hollow Knight - Team Cherry</p>
    </footer>
</body>
</html>