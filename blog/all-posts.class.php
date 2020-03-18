<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TVF Software - Blog</title>
  </head>
  <body class="dashboard-body">
    <div class="container">

        <a href="new-post.php" class="btn btn-info btn-block mt-5 d-md-none">Publicar Post</a>
        <a href="#" class="btn btn-outline-info btn-block mb-5 d-md-none">Ver Posts Publicados</a>

       <table class="table d-md-none">
            <thead>
                <tr class="text-white">
                    <th scope="col">Ultimos posts publicados</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while($list_posts_dashboard_mob = mysqli_fetch_array($get_all_posts_mob)){
    echo "
            
                <tr class='text-white'>
                    <td scope='row'>$list_posts_dashboard_mob[title_posts]</td>
                    <td scope='row'><a href='../post.php?id_post=$list_posts_dashboard_mob[id_posts]' class='btn btn-outline-info' target='_blank'>Visualizar Post</a></td>
                </tr>
                ";
 }
            ?>  
            </tbody>
        </table>

        <div class="row">
            <div class="jumbotron rounded bg-dark jumbotron-fluid border border-info col-12 mt-4 d-none d-md-block">
                <div class="container">
                    <a href="new-post.php" class="btn btn-info mb-4">Publicar Post</a>
                    <a href="#" class="btn btn-outline-info mb-4">Ver Posts Publicados</a>
                    <table class="table">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Ultimos Posts Publicados</th>
                                <th scope="col">&nbsp;</th>
                                
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($list_posts_dashboard = mysqli_fetch_array($get_all_posts)){
                                echo "
                                    <tr class='text-white'>
                                    <td scope='row'>$list_posts_dashboard[title_posts]</td>
                                    <td><a href='#' class='btn btn-outline-info'>Visualizar</td>
                                    
                                    <td><a href='#' class='btn btn-outline-danger'>Apagar</td>
                                </tr>
                                ";
                            }
                        ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>

