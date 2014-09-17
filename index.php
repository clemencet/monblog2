<?php get_header();?>
			<div class="row"> <!--Row2-->
				<div class="col-md-10">
					<section>
						<div class="row">

							  <?php if (have_posts()) : ?>												  	
							  	<?php query_posts('cat=3&showposts=1'); ?>
							   <?php while (have_posts()) : the_post(); ?>							   	
							   	<div class="col-md-6">							   	
							   	<article>
							   	<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>"></a>	
							   		<a href="blog.php">
										<h2 id="turquoise" class="cover">Blog</h2>
									</a>						   	
							    <h3><?php the_title(); ?></h3>
							     <p>
				                  <?php the_excerpt(); ?>
				                 </p>
								</article>
				                 </div>						    					 							   
 								
								<?php endwhile; ?>							
							<?php else: ?>
							  <p>No posts found. :(</p>
							  <?php wp_reset_query(); ?>
							<?php endif; ?>
						
							  <?php if (have_posts()) : ?>												  	
							  	<?php query_posts('cat=4&showposts=1'); ?>
							   <?php while (have_posts()) : the_post(); ?>							   	
							   	<div class="col-md-6">
							   	<article>
							   	<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>"></a>
							   										<a href="#">
										<h2 class="cover mauve" id="violet">Fiction</h2>
									</a>	
							   										
							    <h3><?php the_title(); ?></h3>
							     <p>
				                  <?php the_excerpt(); ?>
				                 </p>
								</article>
				                 </div>						    					 							   
 								
								<?php endwhile; ?>							
							<?php else: ?>
							  <p>No posts found. :(</p>
							  <?php wp_reset_query(); ?>
							<?php endif; ?>


							  <?php if (have_posts()) : ?>												  	
							  	<?php query_posts('cat=5&showposts=1'); ?>
							   <?php while (have_posts()) : the_post(); ?>							   	
							   	<div class="col-md-6">
							   	<article>
							   	<a href="<?php the_title(); ?><<?php echo get_permalink(); ?>"></a>
							   	<a href="#">
										<h2 id="beige" class="cover">Activités pro</h2>
									</a>						   								   	
							    <h3><?php the_title(); ?></h3>
							     <p>
				                  <?php the_excerpt(); ?>
				                 </p>
								</article>
				                 </div>						    					 							   
 								
								<?php endwhile; ?>							
							<?php else: ?>
							  <p>No posts found. :(</p>
							  <?php wp_reset_query(); ?>
							<?php endif; ?>

							

							<div class="col-md-6">
								<article>
									<a href="#" class="cover">
										<h2>A propos</h2>
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
			</div>
			<div class="row">





		<?php get_footer();?>