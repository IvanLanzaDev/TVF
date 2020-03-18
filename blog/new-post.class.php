<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TVF Software - Blog</title>

    <script src="https://cdn.ckeditor.com/4.13.0/standard-all/ckeditor.js"></script>
    <style>
   
    </style>
  </head>
  <body class="dashboard-body">
    <div class="container">
        <div class="jumbotron rounded bg-dark jumbotron-fluid border border-info col-12 mt-4">
            <div class="container">
               
               <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                    <label for="" class="text-white lead">Titulo do post</label>
                    <input type="text" class="form-control" placeholder="Titulo do Post" name="title_posts">
                </div>
                <label for="" class="text-white lead">Conteudo do Post</label>
                <textarea cols="80" id="editor1" name="content_posts" rows="10" data-sample-short></textarea>
                
                <div class="form-group mt-3">

                <input type="submit" class="btn btn-info" name="btn_new_post" value="Publicar">

                </div>
                
               </form>

            </div>
        </div>        
    </div>

    
    <script>
    CKEDITOR.replace('editor1', {
      extraPlugins: 'easyimage',

      toolbar: [{
          name: 'clipboard',
          items: ['Undo', 'Redo']
        },
        {
          name: 'styles',
          items: ['Styles', 'Format']
        },
        {
          name: 'basicstyles',
          items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
        },
        {
          name: 'paragraph',
          items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
        },
        {
          name: 'links',
          items: ['Link', 'Unlink']
        },
        {
          name: 'insert',
          items: ['EasyImageUpload', 'Table']
        },
        {
          name: 'tools',
          items: ['Maximize']
        },
        {
          name: 'editing',
          items: ['Scayt']
        }
      ],

      
      // Reduce the list of block elements listed in the Format drop-down to the most commonly used.
      format_tags: 'p;h1;h2;h3;pre',
      // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
      removeDialogTabs: 'image:advanced;link:advanced',

      height: 300
    });
  </script>
  </body>
</html>

