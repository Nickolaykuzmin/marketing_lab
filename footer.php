<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package blogalexey
 */

?>

	</div><!-- #content -->

		<footer class="footer-box">
		<div class="section_footer">
				<div class="book"></div>
					<div class="text_right">
						<h3>Получи PDF курс:</h3>
						<p>Как за 2 Шага Привлечь Специалиста в проект без Бюджета</p>
						<div class="forma">
						<form action="">
							<table>
								<tr>
									<td><input type="text" placeholder="Ваше имя" required></td>
									<td><input type="text" placeholder="Ваш email" required></td>
									<td><input class="submit" value=" " type="submit"></input></td>
								</tr>
								</table>
						</form>
					</div>
					</div>
					
			</div>

			<div class="nav_footer">
 				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav header-nav' ) ); ?>

			</div>

			<div class="footer_c">
				<p class="texter">Copyright (C) 2015 Aleks Slesar & in-Marketing</p>
			</div>

		<div class="container footer">
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
