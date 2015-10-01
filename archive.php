<?php
/**
 * The template for displaying all single posts.
 *
 * @package blogalexey
 */
?>

<?php 
/*
Template name: Блог
*/
?>
	<?php get_template_part('header_blog');?>
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
			<div class="content">

				<?php if (have_posts()):?>
					<?php while (have_posts()):the_post();?>
				<div class="post">
					<?php the_post_thumbnail('thumbnail'); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="post-info"><a href="#"><?php the_time('Y/m/d'); ?></a><a href="#"><?php comments_number('нет комментариев', '1 комменатрий', '% комментариев'); ?></a><a href="#"> полезное</a></div>
					<?php the_excerpt(); ?>
					<a class="href" href="<?php the_permalink();?>">Читать полностью</a>
						<div id="likes_soc">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v2.4";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="30" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
							
							<div class="twitter">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.in-marketinglab.com">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>

							<div class="google_plus">
								<!-- Вставьте этот тег в заголовке страницы или непосредственно перед закрывающим тегом основной части. -->
								<script src="https://apis.google.com/js/platform.js" async defer>
								  {lang: 'ru'}
								</script>

								<!-- Поместите этот тег туда, где должна отображаться кнопка +1. -->
								<div class="g-plusone" data-annotation="inline" data-width="300"></div>
							</div>
							</div>
				</div>
				<?php endwhile; ?>
				<?php next_posts_link('дальше »', 0); ?>
				<?php previous_posts_link('назад »', 0); ?>
				<?php else: ?>
				<?php endif;?>
			</div>

			<?php get_sidebar(); ?>

			<div class="search">
					<?php get_template_part('searchform');?>
			</div>	
		</div>
	</section>

<?php get_footer();?>
