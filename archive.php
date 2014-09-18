<?php get_header();?>
			<div class="row"> <!--Row2-->
				<div class="col-md-10">
					<section>
							   	
						   		<div class="col-md-11">
						   						
					<?php wp_get_archives(); ?>
						  		</div>	
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