<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ryan Eugênio, Rafael Silva, Vinicius Steyer">
    <meta name="description" content="Projeto final com tema de filmes, cadastrar filme e buscar filmes do banco de dados">
    <link rel="shortcut icon" href="img/icon.jpg">
    <meta name="keywords" content="HTML, CSS, JS, PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Cinema Arcoplex</title>
</head>
    <body>
        <main>
        <header class="jumbotron jumbotron-fluid text-center m-0 cyan">
            <h1>Cinema Arcoplex</h1>
        </header>
        <nav>
            <div class="nav-wrapper cyan lighten-2">
            <a href="index.php"  class="pl-3 brand-logo black-text "><b>Arcoplex</b></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="black-text" href="view/cadastrafilme.php">Cadastrar Filme</a></li>
                <li><a class="black-text" href="view/buscarfilme.php">Table do Filme</a></li>
            </ul>
            </div>
        </nav>
        <?php
        include 'model/filme.class.php';
        include 'dao/filmedaoindex.class.php';

        $filmeDAO = new FilmeDAOIndex();
        $filmes = $filmeDAO->buscarFilmeIndex();
        ?>
        <div class="row">
        <?php
        foreach($filmes as $f){
        echo '<div class="m-3 card mb-3" style="max-width: 540px;">';
        echo '<div class="row">';
            echo '<div class="col-md-4">';
            echo '<img src="img/imgfilme.png" class="card-img" alt="...">';
            echo '</div>';
            echo '<div class="col-md-8">';
            echo '<div class="card-body">';
                echo "<h5 class='card-title'>".$f->nomeFilme."</h5>";
                echo "<p class='card-text'>".$f->descricaoFilme."</p>";
                echo "<p class='card-text'><small class='text-muted'>".$f->idadeIndicativa."</small></p>";
            echo '</div>';
            echo '</div>';
        echo '</div>';
        echo '</div>';
    }
        ?>
        </div>
        </main>
    </body>
</html>