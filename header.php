<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- Leave those next 4 lines if you care about users using IE8 -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head();?>
</head>
<body>	
	<div class="container bg-white">
		<div class="row"> <!--Row1-->
			<header>
				<div class="row">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div>
				<nav class="navbar navbar-default block" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
					    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    		<span class="sr-only">Toggle navigation</span>
					        	<span class="icon-bar"></span>
					       		<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					    	</button>
					    </div><!--fermture navbar-header-->


   <?php
    wp_nav_menu( array(
      'menu' => 'third-nav',
      'theme_location' => 'third-nav',
      'depth' => 2,
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse row bold underline',
      'container_id' => 'bs-example-navbar-collapse-1',
      'menu_class' => 'nav navbar-nav',
      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
      'walker' => new wp_bootstrap_navwalker())
    );
  ?>



						


					</div><!-- fermeture container-fluid -->
				</nav>
			</header>
		</div> <!--fermeturerow1-->
