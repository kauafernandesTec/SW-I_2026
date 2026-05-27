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
    <title>Personagens | Hollow Knight</title>
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
            <h2>Personagens Principais</h2>
            <div class="character-grid">
                <?php
                $personagens = [
                    [
                        'nome' => 'The Knight',
                        'titulo' => 'O Cavaleiro Vazio',
                        'descricao' => 'Protagonista silencioso, um Vessel nascido do Vazio no Abismo. Emerge das profundezas sem memorias, armado apenas com um velho prego. Sua jornada o leva atraves de Hallownest em busca de respostas e, possivelmente, redencao.',
                        'tipo' => 'Protagonista'
                    ],
                    [
                        'nome' => 'Hornet',
                        'titulo' => 'Protetora de Hallownest',
                        'descricao' => 'Filha do Pale King e Herrah the Beast. Hornet e uma guerreira habilidosa que protege os segredos de Hallownest. Inicialmente hostil ao Knight, ela eventualmente reconhece seu potencial e o desafia a provar seu valor.',
                        'tipo' => 'Aliada'
                    ],
                    [
                        'nome' => 'The Hollow Knight',
                        'titulo' => 'O Recipiente Imperfeito',
                        'descricao' => 'O Vessel escolhido pelo Pale King para conter a Radiance. Apesar de ser considerado "puro", ele desenvolveu uma conexao emocional com seu pai, tornando-o imperfeito. Agora jaz acorrentado no Templo do Ovo Negro.',
                        'tipo' => 'Chefe'
                    ],
                    [
                        'nome' => 'The Radiance',
                        'titulo' => 'Deusa Esquecida da Luz',
                        'descricao' => 'Divindade ancestral das Moth Tribe. Antes adorada por todos os insetos, foi esquecida quando o Pale King chegou. Sua furia manifesta-se como a Infeccao, uma praga que consome as mentes de Hallownest.',
                        'tipo' => 'Antagonista'
                    ],
                    [
                        'nome' => 'The Pale King',
                        'titulo' => 'Wyrm Palido',
                        'descricao' => 'Antigo governante de Hallownest. Um ser de grande poder que concedeu consciencia aos insetos. Criou os Vessels em desespero para combater a Infeccao. Seu destino permanece misterioso.',
                        'tipo' => 'Figura Historica'
                    ],
                    [
                        'nome' => 'Quirrel',
                        'titulo' => 'O Estudioso Viajante',
                        'descricao' => 'Um inseto curioso que explora Hallownest em busca de conhecimento. Carrega a mascara de Monomon e encontra o Knight em varios locais, compartilhando sabedoria e reflexoes sobre o reino caido.',
                        'tipo' => 'Aliado'
                    ]
                ];
                foreach ($personagens as $char):
                ?>
                <div class="character-card">
                    <div class="character-avatar"><?php echo substr($char['nome'], 0, 1); ?></div>
                    <div class="character-info">
                        <span class="character-type"><?php echo $char['tipo']; ?></span>
                        <h3><?php echo $char['nome']; ?></h3>
                        <span class="character-title"><?php echo $char['titulo']; ?></span>
                        <p><?php echo $char['descricao']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section">
            <h2>Os Tres Dreamers</h2>
            <p class="section-intro">Tres seres poderosos que mantem o selo sobre o Templo do Ovo Negro, onde o Hollow Knight esta aprisionado.</p>
            <div class="card-grid">
                <?php
                $dreamers = [
                    [
                        'nome' => 'Monomon the Teacher',
                        'descricao' => 'Guardia do Arquivo, uma vasta biblioteca subaquatica. Ela estudou os segredos do reino e deixou seu conhecimento para as geracoes futuras.'
                    ],
                    [
                        'nome' => 'Lurien the Watcher',
                        'descricao' => 'Observador da Cidade das Lagrimas. De sua torre, ele vigiava o reino com seu unico olho, sempre leal ao Pale King.'
                    ],
                    [
                        'nome' => 'Herrah the Beast',
                        'descricao' => 'Rainha das Aranhas de Deepnest. Ela aceitou se tornar Dreamer em troca de uma filha - Hornet - nascida do Pale King.'
                    ]
                ];
                foreach ($dreamers as $dreamer):
                ?>
                <div class="card">
                    <h3><?php echo $dreamer['nome']; ?></h3>
                    <p><?php echo $dreamer['descricao']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section">
            <h2>Outros Personagens</h2>
            <div class="card-grid">
                <?php
                $outros = [
                    ['nome' => 'Elderbug', 'descricao' => 'O ultimo habitante de Dirtmouth. Ele da as boas-vindas aos viajantes e oferece conselhos simples.'],
                    ['nome' => 'Cornifer', 'descricao' => 'Cartografo que explora Hallownest, vendendo mapas das regioes que visita.'],
                    ['nome' => 'Iselda', 'descricao' => 'Esposa de Cornifer, administra a loja de mapas em Dirtmouth.'],
                    ['nome' => 'Sly', 'descricao' => 'Comerciante em Dirtmouth. Antigo mestre do prego e membro dos Nailmasters.'],
                    ['nome' => 'Grimm', 'descricao' => 'Mestre da Grimm Troupe, uma companhia de artistas ligada ao Nightmare Realm.'],
                    ['nome' => 'Zote', 'descricao' => 'Auto-proclamado cavaleiro lendario. Arrogante e incompetente, mas persistente.']
                ];
                foreach ($outros as $outro):
                ?>
                <div class="card">
                    <h3><?php echo $outro['nome']; ?></h3>
                    <p><?php echo $outro['descricao']; ?></p>
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