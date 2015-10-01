<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package blogalexey
 */
?>

<aside class="aside">
	  <a class="twitter-timeline"  href="https://twitter.com/Aleks_Slesar" data-widget-id="629548011190919168">Твиты от @Aleks_Slesar</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></aside>
<aside class="aside">
	
				<h2></h2>
				<ul>
<?php query_posts('category_name&showposts=4');?>

<?php while (have_posts()): the_post();?>
								<li>
									<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail(array(60, 60));
	?></a>

									<span><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();
	?></a></span>
									<div><center><?php the_time('Y/m/d');?></center></div>

								</li>
	<?php endwhile;?>
</ul>

			</aside>


