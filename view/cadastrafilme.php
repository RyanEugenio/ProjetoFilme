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
    <title>Cadastrar</title>
</head>
    <body>
        <main>
        <header class="jumbotron jumbotron-fluid text-center m-0 cyan">
            <h1>Cadastro de Filme</h1>
        </header>
        <nav>
            <div class="nav-wrapper cyan lighten-2">
            <a href="../index.php"  class="pl-3 brand-logo black-text"><b>Arcoplex</b></a>
            </div>
        </nav>
        <div class="row p-5">
            <form action="../controller/filme.controller.php?op=cadastrar" class="col s12" method="post" name="formfilme">
            <div class="row">
                <div class="input-field col s12">
                <input placeholder="Digite o nome do filme" id="nomeFilme" name="txtnomefilme" type="text" class="validate">
                <label for="nomeFilme">Nome do Filme</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input placeholder="Digite a idade indicativa" id="idadeIndicativa" name="txtidadeindicativa" type="text" class="validate">
                <label for="idadeIndicativa">Idade Indicativa</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <textarea placeholder="Digite a descrição do Filme" id="descricaoFilme" name="txtdescricaofilme" class="materialize-textarea"></textarea>
                <label for="descricaoFilme">Descrição do Filme</label>
                </div>
            </div>
                <input type="submit" name="envia" value="Enviar" class="waves-effect waves-light cyan lighten-3 btn">
                <input type="reset" name="limpa" value="Limpar" class="waves-effect waves-light cyan lighten-3 btn">
            </form>
        </div>
        </main>
    </body>
</html>