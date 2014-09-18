<?php
/*
Template Name: Dancing Groot
*/
?>

<?php get_header();?>
			<div class="row"> <!--Row2-->
				<div class="col-md-10">
					<section>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>							   	
						   		<div class="col-md-11">
						   			<article>					   	
									   	<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>">
									   		<h3><?php the_title(); ?></h3>
									   	</a>
								    	<p>
								     		<small>Ecrit par <?php the_author();?> le <?php the_time( get_option( 'date_format' ) ); ?> </small>
								     	</p>
										<p>
					               			<?php the_excerpt(); ?>
					               		</p>
									</article>
			               		</div>						
							<?php endwhile; ?>							
							<?php else: ?>
						  		<p>Aucun article trouvé. :(</p>
						<?php endif; ?>	
						<div class="col-md-11">
							<div class="nav-previous text-left"><?php next_posts_link( 'Précédents' ); ?></div>
							<div class="nav-next text-right"><?php previous_posts_link( 'Suivants' ); ?></div>

						</div>
					</section>
				</div> <!--fermeture 10 col-->
					<div class="col-md-2">
					<aside class="wide">
						<ul id="sidebar" class="no-padding">
						    <?php dynamic_sidebar( 'Main Sidebar' ); ?>
						</ul>				
					</aside>
				</div> <!--fermeture 2 col-->				
			</div> <!--fermeture row2-->
			<div class="row">
				<?php get_footer();?>