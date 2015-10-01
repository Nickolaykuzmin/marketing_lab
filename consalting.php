<?php 
/*
Template Name: Консалтинг
*/

?>

<?php get_template_part('header_consalting'); ?>

<section id="content_consalt">
	<div class="logo_consalt"></div>
	<div class="title_consult"><h3>Хотели Бы Вы</h3><h3>Чтобы я лично увеличил ваш доход в 2,3 или 4 раза ...</h3><span>Бесплатно?</span></h3></div>

		<div class="page_consalt">
			<?php while ( have_posts() ) : the_post(); ?>
						
				<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
		</div>
		

</section>
<?php get_footer(); ?>