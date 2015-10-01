<?php get_header(); ?>
	<section class="subs-box">
		<div class="container subs">
			<div class="subs-text">
				<h2>
					Вы готовы создать бизнес<br>своей мечты? <span>онлайн!</span>
				</h2>
			</div>
			<div class="subs-form">
				<img class="cover-img" src="<?php bloginfo('template_directory')?>/images/cover.jpg" alt="Обложка бесплатных уроков">
				<p>Получите бесплатный доступ к серии<br>видеоуроков по старту успешного бизнеса<br>в интернете прямо сейчас!</p>
				<p class="bolder">Куда мне отправлять Ваши бесплатные уроки?</p>
				<form action="">
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
	</section>
	<section class="cons-box">
		<div class="container cons">
			<div class="case group-case">
				<h3>работать в команде своей мечты</h3>
				<div class="circle group"></div>
				<p>Зарабатывайте 100$/месяц -<br>и более -<br>в команде единомышленников</p>
				<button class="but cons-but">Начать уже сегодня</button>
			</div>
			<div class="case consal-case">
				<h3>работать в команде своей мечты</h3>
				<div class="circle consal"></div>
				<p>Личная работа<br>над Вашим проектом<br>до результата</p>
				<button class="but cons-but">Да, хочу!</button>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>
