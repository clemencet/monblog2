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
							    <h3><?php the_title(); ?></h3>
							     <p>
				                  <?php the_excerpt(); ?>
				                 </p>
								</article>
				                 </div>						    					 							   
 								<?php wp_reset_query(); ?>
								<?php endwhile; ?>							
							<?php else: ?>
							  <p>No posts found. :(</p>
							<?php endif; ?>
						





							</div>



							<div class="col-md-6">
								<article>
									<a href="blog.php">
										<h2 id="turquoise" class="cover">Blog</h2>
									</a>
									<h3 class="text-center">Portrait de Blanche-Neige</h3>
									<p class="mauve"><small>Posté par Clémence, le 3 septembre 2014<small></p>
									<p class="text-justify alinea">A tout seigneur, tout honneur : la toute première princesse Disney, inspirée du célèbre conte des frères Grimm, est aussi une super potiche. Elle a tous les attributs de la princesse de conte de fée : belle, délicate, gentille et douce. Le studio lui apporte également quelques traits de personnalité qui deviennent la marque de fabrique des princesses Disney : une capacité innée à faire amie avec n’importe quelle boule de poils ou de plume et l’habitude de pousser la chansonnette pour un oui, pour un non, même – surtout ! – quand elle passe le balai. Pour que sa voix devienne tout à fait iconique, Walt Disney avait d'ailleurs fait passer à son interprète originale, Adriana Caselotti, un contrat très restrictif qui a saboté sa carrière au cinéma.</p>
									<a href="blog-article.php" class="padding standard">Lire la suite</a>
								</article>
							</div>
							<div class="col-md-6">
								<article>
									<a href="#">
										<h2 class="cover mauve" id="violet">Fiction</h2>
									</a>
									<p class="text-justify alinea">Restabat ut Caesar post haec properaret accitus et abstergendae causa suspicionis sororem suam, eius uxorem, Constantius ad se tandem desideratam venire multis fictisque blanditiis hortabatur. quae licet ambigeret metuens saepe cruentum, spe tamen quod eum lenire poterit ut germanum profecta, cum Bithyniam introisset, in statione quae Caenos Gallicanos appellatur, absumpta est vi febrium repentina. cuius post obitum maritus contemplans cecidisse fiduciam qua se fultum existimabat, anxia cogitatione, quid moliretur haerebat.</p>
									<a href="#" class="padding standard">Lire la suite</a>
								</article>
							</div>
						</div> <!--Fermeture row-->
						<div class="row">
							<div class="col-md-6">
								<article>
									<a href="#">
										<h2 id="beige" class="cover">Activités pro</h2>
									</a>
										<p class="text-justify alinea">Mox dicta finierat, multitudo omnis ad, quae imperator voluit, promptior laudato consilio consensit in pacem ea ratione maxime percita, quod norat expeditionibus crebris fortunam eius in malis tantum civilibus vigilasse, cum autem bella moverentur externa, accidisse plerumque luctuosa, icto post haec foedere gentium ritu perfectaque sollemnitate imperator Mediolanum ad hiberna discessit.</p>
									<a href="#" class="padding standard">Lire la suite</a>
								</article>
							</div>
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
			<div class="row">

		<?php get_footer();?>