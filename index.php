<?php get_header();?>
			<div class="row"> <!--Row2-->
				<div class="col-md-10">
					<section>
						<div class="row"> <!--row art1-->
							<?php if (have_posts()) : ?>												  	
								<?php query_posts('cat=3&showposts=1'); ?>
									<?php while (have_posts()) : the_post(); ?>							   	
									   	<div class="col-md-6">							   	
									   		<article>									   				
									   			<a href=" <?php echo get_category_link( 3 ); ?>">
													<h2 id="turquoise" class="cover title-category">Blog</h2>
												</a>						   	
									    		<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>"><h3 class="title-post"><?php the_title(); ?></h3></a>
									     		<p>
									     			<small><em>Ecrit par <?php the_author();?> le <?php the_time( get_option( 'date_format' ) ); ?> </em></small>
									     		</p>
									     		<p>
						                			<?php the_excerpt(); ?>
						                		</p>
											</article>
						                </div>						    					 							   
	 								<?php endwhile; ?>							
									<?php else: ?>
								  		<p>Aucun article trouvé :(</p>
							  	<?php wp_reset_query(); ?>
							<?php endif; ?>						
							<?php if (have_posts()) : ?>												  	
							  	<?php query_posts('cat=4&showposts=1'); ?>
									<?php while (have_posts()) : the_post(); ?>							   	
							   			<div class="col-md-6">
							   				<article>							   					
							   					<a href=" <?php echo get_category_link( 4 ); ?> ">
													<h2 class="cover bcanard title-category" id="violet">Fiction</h2>
												</a>								   										
							    				<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>"><h3 class="title-post"><?php the_title(); ?></h3></a>
							    				<p>
							    					<small><em>Ecrit par <?php the_author();?> le <?php the_time( get_option( 'date_format' ) ); ?></em></small>
							    				</p>
							     				<p>
				                  					<?php the_excerpt(); ?>
				                 				</p>
											</article>
				                 		</div>
									<?php endwhile; ?>							
									<?php else: ?>
							  			<p>Aucun article trouvé. :(</p>
							  	<?php wp_reset_query(); ?>
							<?php endif; ?>
						</div><!--row art1-->
						<div class="row">				    					 							    							
							<?php if (have_posts()) : ?>												  	
								<?php query_posts('cat=5&showposts=1'); ?>
							   		<?php while (have_posts()) : the_post(); ?>							   	
							   			<div class="col-md-6">
							   				<article>
							   					<a href=" <?php echo get_category_link( 5 ); ?> ">
													<h2 id="beige" class="cover title-category">Activités pro</h2>
												</a>						   								   	
							    				<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>"><h3 class="title-post"><?php the_title(); ?></h3></a>
							    				<p>
							    					<small><em>Ecrit par <?php the_author();?> le <?php the_time( get_option( 'date_format' ) ); ?></em></small>
							    				</p>
							     				<p>
				                					<?php the_excerpt(); ?>
				                				</p>
											</article>
				                 		</div>						    					 							   						
									<?php endwhile; ?>							
									<?php else: ?>
							  			<p>Aucun article trouvé. :(</p>
								<?php wp_reset_query(); ?>
							<?php endif; ?>							
							<div class="col-md-6">
								<article>
									<a href="<?php echo get_permalink( 6 ); ?>" class="cover">
										<h2 class="title-category">A propos</h2>
									</a>
									<p class="text-justify alinea">Mox dicta finierat, multitudo omnis ad, quae imperator voluit, promptior laudato consilio consensit in pacem ea ratione maxime percita, quod norat expeditionibus crebris fortunam eius in malis tantum civilibus vigilasse, cum autem bella moverentur externa, accidisse plerumque luctuosa, icto post haec foedere gentium ritu perfectaque sollemnitate imperator Mediolanum ad hiberna discessit.</p>								
									<a href="#" class="padding standard">Lire la suite</a>
								</article>
							</div> <!--fermeture 6 col-->
						</div> <!--fermeture row-->				
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