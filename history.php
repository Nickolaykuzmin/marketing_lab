<?php 
/*
Template name: История
*/
?>
<?php get_template_part('header_history');?>

	<section class="subs-box">
		<div class="container subs">
			
			<div class="subs-form">
				<div class="subs-wrap">
					<p class="bolder">Куда мне отправлять Ваши бесплатные уроки?</p>
					<form class="form" action="">
						<input class="name" type="text" name="name" placeholder="Ваше Имя">
						<input class="email" type="email" name="email" placeholder="Ваш E-mail">
						<button class="but subs-but">Получить доступ к видеоурокам</button>
					</form>
					<ul class="subs-other">
						<li><a href="#">Политика конфиденциальности</a></li>
						<li><a href="#">Отказ от ответственности</a></li>
						<li><a href="#">Согласие с рассылкой</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<section class="main-box">
		<div class="container main">
			<ul class="breadcrumb">		
				<?php the_breadcrumb(); ?>
			</ul>
			<div class="content">
					
					<div class="history">
						<?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title();?></h1>
					</div>
					
				<div class="post">
					<?php the_content(); ?>

					<?php endwhile; // end of the loop. ?>
				</div>
			
			</div>



			<aside class="aside">
				<?php get_template_part('searchform'); ?>
			</aside>
			<aside class="aside">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) { ?>
 <?php } ?>
			</aside>
		</div>
	</section>

	<?php get_footer(); ?>