<?php
/**
 * @package blogalexey
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php the_title();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>
	<header class="header-box">
		<div class="container header">
			<img class="logo-img" src="<?php bloginfo('template_directory')?>/images/logo.png" alt="Slesar Aleks">
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav header-nav' ) ); ?>
			</nav>
		</div>
	</header>
