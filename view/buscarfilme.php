<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ryan Eugênio, Rafael Silva, Vinicius Steyer">
    <meta name="description" content="Projeto final com tema de filmes, cadastrar filme e buscar filmes do banco de dados">
    <link rel="shortcut icon" href="../img/icon.jpg">
    <meta name="keywords" content="HTML, CSS, JS, PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <h1>Tabela de Filmes</h1>
        </header>
        <nav>
            <div class="nav-wrapper cyan lighten-2">
            <a href="../index.php"  class="pl-3 brand-logo black-text "><b>Arcoplex</b></a>
            </div>
        </nav>
        <?php
        include '../model/filme.class.php';
        include '../dao/filmedao.class.php';

        $filmeDAO = new FilmeDAO();
        $filmes = $filmeDAO->buscarFilme();
        ?>
            <table class="highlight centered responsive-table">
               <thead>
                 <tr>
                   <th>Código</th>
                   <th>Nome do Filme</th>
                   <th>Idade Indicativa</th>
                   <th>Descrição Filme</th>
                   <th>Editar/Excluir</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                    foreach ($filmes as $f) {
                      echo "<tr>";
                      echo "<td>".$f->idfilme."</td>";
                      echo "<td>".$f->nomeFilme."</td>";
                      echo "<td>".$f->idadeIndicativa."</td>";
                      echo "<td>".$f->descricaoFilme."</td>";
                      echo "<td>
                        <a href='../controller/filme.controller.php?op=alterar&idfilme=$f->idfilme'>
                        <i class='material-icons'>edit</i></a>&nbsp;&nbsp;
                        <a href='../controller/filme.controller.php?op=deletar&idfilme=$f->idfilme'>
                        <i class='material-icons'>delete</i>
                            </a>
                            </td>";
                      echo "</tr>";
                    }
                  ?>
               </tbody>
             </table>
        </main>
    </body>
</html>
