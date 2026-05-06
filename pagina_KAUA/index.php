<?php
$_MENU = [
    'Home' => '<h1>Home page aqui</h1>',
    'Sobre' => 'sobre.php',
    'Contato' => 'contato.php',
    'Experiencias' => 'experiencias.php',
    'Projetos' => 'projetos.php',
    
];
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 07</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<header class="Logo">

    <a class="logo">
        <img src="eu_logo.png" alt="Logo">
    </a>

    <nav>
        <?php
        foreach($_MENU as $key => $value){
            echo '<a href="?page='.$key.'">'.$key.'</a> | ';
        }
        ?>
    </nav>

</header>

<main>

    <?php
    $pagina = $_GET['page'] ?? 'Home';
    if(array_key_exists($pagina, $_MENU)){

    if(file_exists($_MENU[$pagina])) {
        include $_MENU[$pagina];
    } else {
        echo $_MENU[$pagina];
    }
} else {
    echo '<h1>Página não encontrada</h1>';
}
 ?>

</main>

</body>
</html>