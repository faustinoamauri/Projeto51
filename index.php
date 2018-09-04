
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>

  <body>
    <!-- MENU -->
    <div class="container"> 
      <?php include("_includes/menu.php");  ?>
    </div>
    <!-- /MENU -->

    <main role="main">

      <!-- DESTAQUE -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Projeto 51!</h1>
          <p>Este é um template para um simples marketing ou website informacional. Ele inclui um callout grande (denominado jumbotron) e três conteúdos adicionais. Use-o como um ponto de partida para algo mais peculiar.</p>
          <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>-->
        </div>
      </div>
      <!-- /DESTAQUE -->

      <!-- CARD-DECK -->
      <div class="container">
        <div class="card-deck">
          <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5 class="card-title">Título do Post</h5></div>
            <div class="card-body"><p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p></div>
            <div class="card-footer"><small class="text-muted">Atualizados 3 minutos atrás</small></div>
          </div>
          <div class="card border-warning mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5 class="card-title">Título do Post</h5></div>
            <div class="card-body"><p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p></div>
            <div class="card-footer"><small class="text-muted">Atualizados 3 minutos atrás</small></div>
          </div>
          <div class="card border-danger mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5 class="card-title">Título do Post</h5></div>
            <div class="card-body"><p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p></div>
            <div class="card-footer"><small class="text-muted">Atualizados 3 minutos atrás</small></div>
          </div>
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5 class="card-title">Título do Post</h5></div>
            <div class="card-body"><p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p></div>
            <div class="card-footer"><small class="text-muted">Atualizados 3 minutos atrás</small></div>
          </div>
        </div>
        <hr>
      </div>
      <!-- /CARD-DECK -->
      
      <!-- Exemplo -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Título</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Título</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Título</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div>
      <!-- /Exemplo -->

    </main>  

    <footer>
      <?php include("_includes/rodape.php"); ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
