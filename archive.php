<?php get_header();?>
			<div class="row"> <!--Row2-->
				<div class="col-md-10">
					<section class="clearfix">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>							   	
						   		<div class="col-md-11 sep padding-bot">
						   			<article>					   	
									   	<a href="<?php echo get_permalink(); ?>">
									   		<h3><?php the_title(); ?></h3>
									   	</a>
								    	<p>
								     		<small>Ecrit par <?php the_author();?> le <?php the_time( get_option( 'date_format' ) ); ?> </small>
								     	</p>
								     	<div class="row">
								     		<div class="col-md-3 rounded">
										     	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
													the_post_thumbnail();} 
												?>

											</div>
											<div class="col-md-9">
												<p>
							               			<?php the_excerpt(); ?>
							               		</p>
					               			</div>
					               		</div>
									</article>
			               		</div>						
							<?php endwhile; ?>							
							<?php else: ?>
						  		<p>Aucun article trouvé. :(</p>
						<?php endif; ?>	
						<div class="col-md-11 padding padding-bot">
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