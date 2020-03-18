<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog da TVF - Login</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Estilos customizados para esse template -->
    <link href="styles/signin.css" rel="stylesheet">
  </head>

  <body class="text-center bg-dark">
    <form class="form-signin" method="post" action="#">
      <img class="mb-4" src="../img/logo-cinza.png" alt="" width="92" height="72">
      <h1 class="h3 mb-3 font-weight-normal text-white">Acessar Blog</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus name="email_user">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="pass_user">
      
      <button class="btn btn-lg btn-info btn-block" type="submit" name="btn_login">Login</button>
    </form>
  </body>
</html>
