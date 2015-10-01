<?php
/**
 * The template for displaying all single posts.
 *
 * @package blogalexey
 */
?>

	<?php get_template_part('header_single');?>

	
	<section class="subs-box">
		<div class="container subs">
			<div class="subs-text">
				<h2>
					Вы готовы создать бизнес<br>своей мечты? <span>онлайн!</span>
				</h2>
			</div>
			<div class="subs-form">
				<div class="subs-wrap">
					<p>Получите Бесплатный Доступ к Серии Видеоуроков по Старту<br>Успешного Бизнеса в Интернет Прямо Сейчас!</p>
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
				<div class="post">
					<div class="img"><?php the_post_thumbnail('medium'); ?></div>
					<?php while ( have_posts() ) : the_post(); ?>
						<h2 class="titles"><?php the_title();?></h2>
						<hr>
					<?php the_content(); ?>
					<?php edit_post_link(__('Редактировать')); ?>

					<?php endwhile; // end of the loop. ?>
				</div>

					<div id="mc-container"></div>
					<script type="text/javascript">
					cackle_widget = window.cackle_widget || [];
					cackle_widget.push({widget: 'Comment', id: 36977});
					(function() {
					    var mc = document.createElement('script');
					    mc.type = 'text/javascript';
					    mc.async = true;
					    mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
					})();
					</script>
					

					<h2>Коментарии:</h2>
					  <ul class="nav nav-tabs">
					    <li class="active"><a href="#home">Vkontakte</a></li>
					    <li><a href="#facebook">Facebook</a></li>
					  </ul>

					  <div class="tab-content">

					    <div id="home" class="tab-pane fade in active">
					    	<!-- Put this script tag to the <head> of your page -->
							<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

							<script type="text/javascript">
							  VK.init({apiId: 5027120, onlyWidgets: true});
							</script>

							<!-- Put this div tag to the place, where the Comments block will be -->
							<div id="vk_comments"></div>
							<script type="text/javascript">
							VK.Widgets.Comments("vk_comments", {limit: 10, width: "620", attach: "*"});
							</script>
					    </div>

					    <div id="facebook" class="tab-pane fade">
							
						</div>
				
					  </div>
			<div class="relatedposts">
					<h3>Похожие записи:</h3>
					<?php
						$orig_post = $post;
						global $post;
						$tags = wp_get_post_tags($post->ID);

						if ($tags) {
						$tag_ids = array();
						foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						$args=array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=>3, // Количество записей, которые выводятся
						'caller_get_posts'=>1
						);

						$my_query = new wp_query( $args );

						while( $my_query->have_posts() ) {
						$my_query->the_post();
						?>

						<div class="relatedthumb">
							<a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail(array(150,100)); ?><br />
							<?php the_title(); ?>
							</a>
						</div>

				<? }
				}
				$post = $orig_post;
				wp_reset_query();
				?>
			</div>
			</div>



			<aside class="aside">
				<?php get_template_part('searchform'); ?>
				
			</aside>
		</div>
	</section>

	<?php get_footer(); ?>