<?php get_header();?>
			<div class="row"> <!--Row2-->
				<div class="col-md-10">
					<section>
						<?php if (have_posts()) : ?>				   	
							<?php while (have_posts()) : the_post(); ?>							   	
						   		<div class="col-md-11">
						   			<article>
						   				<a class="text-center" href="<?php the_title(); ?><<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						     			<p>
											<?php the_content(); ?>
				               			</p>
				               			<p><?php the_tags( 'Mots-clés : ', ', ', '' );?></p>
									</article >
			               		</div>						
							<?php endwhile; ?>							
							<?php else: ?>
						  		<p>Aucun article trouvé. :(</p>
						<?php endif; ?>	
						<div class="col-md-11">
							<?php comments_template(); ?> 
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