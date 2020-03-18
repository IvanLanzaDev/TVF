<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog da TVF</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Estilos customizados para esse template -->
    <link href="styles/signin.css" rel="stylesheet">
  </head>

  <body class="text-center bg-dark">
    <form class="form-signin" method="post">
      <img class="mb-4" src="imgs/alert-icon.png" alt="">
      <h3 class="display-4 text-white">Tem Certeza?</h3> 
      <p class="text-light">O post será apagado, sem a possibilidade de reverter a operação!!! <?php echo $id_delete_post_url; ?></p>
      
      
            <input type="submit" class="btn btn-danger btn-block mb-2" name="btn_delete_post" value="Apagar">
            <a href="dashboard.php" class="btn btn-light btn-block">Cancelar</a>
      
      
    </form>
  </body>
</html>
