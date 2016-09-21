<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erik Figueiredo - Programador</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="text-center">
    <div class="small-container">
      <p><img src="image/erik-figueiredo.jpg" alt="" class="img-thumbnail"></p>
      <h1>Erik Figueiredo</h1>
      <h3>full-stack developer</h3>

      <hr>

      <p>Sou programador, desenvolvedor web, mobile e professor no WebDevBr, MxCursos, Centro de Treinamento Novatec, Code-Squad, School of Net e também freelancer.</p>

      <p>Trabalho com desenvolvimento de aplicativos móveis (Ionic), MEAN (MongoDb, Express, Angular e NodeJs), PHP (e os frameworks CakePHP 2 e 3, Laravel 5 e Zend Framework 2 e 3) e desenvolvimento front-end (HTML 5, CSS 3, Javascript, Angularjs, Angular 2 e VueJs).</p>

      <hr>

      <form action="send.php" class="text-left" method="post">
        <p class="text-center">Precisa de um dev? Manda uma mensagem:</p>
        <div class="form-group">
          <label for="name" min=="3">Seu nome</label>
          <input name="name" type="text" class="form-control" id="name" placeholder="Nome" required="required">
        </div>
        <div class="form-group">
          <label for="email">Seu email</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Email..." required="required">
        </div>
        <div class="form-group">
          <label for="description" min=="10">Seu email</label>
          <textarea name="description" class="form-control" id="description" placeholder="Descrição..." rows=3 required="required"></textarea>
          <small>Descreva seu projeto detalhadamente e, se possível, informe o prazo aceitável para a finalização.</small>
        </div>
        <input type="submit" value="Enviar" class="btn btn-default">
      </form>
    </div>

    <p> <small>todos os direitos reservados - <?php echo date('Y');?></small> </p>
  </body>
</html>