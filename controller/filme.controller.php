
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ryan Eugênio, Rafael Silva, Vinicius Steyer">
    <meta name="description" content="Projeto final com tema de filmes, cadastrar filme e buscar filmes do banco de dados">
    <link rel="shortcut icon" href="../img/icon.jpg">
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
            <a href="../index.php"  class="pl-3 brand-logo black-text "><b>Arcoplex</b></a>
            </div>
        </nav>
          <section class="home container-fluid" id="home">

            <?php
              session_start();
              include '../model/filme.class.php';
              include '../util/util.class.php';
              include '../dao/filmedao.class.php';

              $u1 = new Util();
              switch($_GET['op']){
                case 'cadastrar':
                  $nomeFilme = $_POST['txtnomefilme'];
                  $idadeIndicativa = $_POST['txtidadeindicativa'];
                  $descricaoFilme = $_POST['txtdescricaofilme'];

                  if(empty($nomeFilme) || empty($idadeIndicativa) || empty($descricaoFilme)){
                    echo 'Preencha os campos.';
                  }else{
                    $f = new Filme();
                    $f->nomeFilme = $nomeFilme;
                    $f->idadeIndicativa = $idadeIndicativa;
                    $f->descricaoFilme = $descricaoFilme;

                    $filmeDAO = new FilmeDAO();
                    $filmeDAO->cadastrarFilme($f);
                    
                    header('location:../view/confirmacadastro.html');
                  }
                break;

                case 'deletar':
                  $fDAO = new FilmeDAO();
                  $fDAO->deletarFilme($_REQUEST['idfilme']);
                  header('location:../index.php');
                break;

                case 'alterar':
                $idfilme = $_REQUEST['idfilme'];
                $query = 'WHERE idfilme = '.$idfilme;
                $fDAO = new FilmeDAO();
                $filmes = array();
                $filmes = $fDAO->buscar($query);

                $_SESSION['filmes']=serialize($filmes);

                header("location:../view/alterarfilme.php");
              break;

              case 'confirmaralteracao':
                $f = new Filme();
                $f->idfilme = $_POST['txtidfilme'];
                $f->nomeFilme = $_POST['txtnomefilme'];
                $f->idadeIndicativa = $_POST['txtidadeindicativa'];
                $f->descricaoFilme = $_POST['txtdescricaofilme'];
                $fDAO = new FilmeDAO();
                $fDAO->alterarfilme($f);
                header('location:../view/buscarfilme.php');
              break;

              default:
                echo "Errou o nome do case!!!";
              }
            ?>
      </section>
      </main>
    </body>
</html>