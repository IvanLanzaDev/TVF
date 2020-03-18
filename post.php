<?php include("blog/functions.class.php"); ?>

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->


<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Blog da TVF Software</title>
	<meta name="description"  content="" />
	<meta name="author" content="">
	<meta name="keywords"  content="" />
	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animsition.min.css"/>
	<link rel="stylesheet" href="css/swiper.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.jpg">
	<link rel="apple-touch-icon" href="apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.jpg">
	
	
</head>
<body>

	<!-- Page preloader wrap
	================================================== -->

	<div class="animsition">	
		
		<!-- Nav and Logo
		================================================== -->

		<header class="cd-header">
			<div class="header-wrapper">
				<div class="logo-wrap">
					<a href="index.html" class="hover-target animsition-link"><img src="img/logo-cinza.png" alt=""></a>
				</div>
				<div class="nav-but-wrap">
					<div class="menu-icon hover-target">
						<span class="menu-icon__line menu-icon__line-left"></span>
						<span class="menu-icon__line"></span>
						<span class="menu-icon__line menu-icon__line-right"></span>
					</div>					
				</div>					
			</div>				
		</header>

		<div class="nav">
			<div class="nav__content">
				<div class="curent-page-name-shadow">Blog</div>
				<ul class="nav__list">
					<li class="nav__list-item"><a href="index.html" class="hover-target animsition-link">Início</a></li>
					<li class="nav__list-item"><a href="atvf.html" class="hover-target animsition-link">A TVF</a></li>
					<li class="nav__list-item"><a href="servicos.html" class="hover-target animsition-link">Serviços</a></li>
					<li class="nav__list-item active-nav"><a data-toggle="collapse" href="#collapseSub" class="hover-target" role="button" aria-expanded="false" aria-controls="collapseSub">Blog</a>
						<ul class="sub-links collapse" id="collapseSub">
							<li class="active-nav"><a href="#" class="hover-target animsition-link">slider centerd title</a></li>
							<li><a href="index.html" class="hover-target animsition-link">slider centerd image</a></li>
							<li><a href="index.html" class="hover-target animsition-link">slider bottom title</a></li>
							<li><a href="index.html" class="hover-target animsition-link">slice revealer</a></li>
							<li><a href="index.html" class="hover-target animsition-link">masonry version</a></li>
						</ul>
					</li>
					<li class="nav__list-item"><a href="contact.html" class="hover-target animsition-link">Fale Conosco</a></li>
				</ul>
			</div>
		</div>	

		<!-- Primary Page Layout
		================================================== -->

		<div class="shadow-title parallax-top-shadow">Blog</div>
		
		<div class="section padding-page-top padding-bottom over-hide z-bigger">
			<div class="container z-bigger">
				<div class="row page-title px-5 px-xl-2">
					<div class="col-12 parallax-fade-top">
						
						<h1>
                        <?php 
                            $list_get_title = mysqli_fetch_array($get_title);
                            echo $list_get_title['title_posts'];
                        ?>
                        </h1>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="section padding-bottom-big z-bigger over-hide">
			<div class="container z-bigger">
				<div class="row page-title px-5 px-xl-2">
					<div class="col-12">
						<ul class="case-study-wrapper vertical-blog">

                            <?php
                            
                                    $list_show_post = mysqli_fetch_array($show_post);
                                    echo "
                                        <li class='case-study-name mb-5'>
                                            <div class='row'>
                                                <div class='col-lg-6'>
                                                  
                                                <p class='pl-0 pl-md-5 mb-4'>
                                                    $list_show_post[content_posts]
                                                </p>
                                                    
                                                </div>
                                            </div>	
                                        </li>
                                    ";
                                
                            ?>

						</ul>
						<a href="blog.php" class="btn btn-sm btn-outline-light">Voltar</a>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<!-- Social links
		================================================== -->
		
		<div class="social-fixed">
			<a href="#" class="hover-target">tw</a>
			<a href="#" class="hover-target">fb</a>
			<a href="#" class="hover-target">be</a>
			<a href="#" class="hover-target">gh</a>
		</div>
		
		
		<div class="scroll-to-top hover-target"></div>
		
		<!-- Page cursor
		================================================== -->
		
        <div class='cursor' id="cursor"></div>
        <div class='cursor2' id="cursor2"></div>
        <div class='cursor3' id="cursor3"></div>

	</div>

	
	<!-- JAVASCRIPT
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script> 
	<script src="js/custom.js"></script>  
<!-- End Document
================================================== -->
</body>

<!-- Mirrored from ivang-design.com/euthenia/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 12:35:41 GMT -->
</html>