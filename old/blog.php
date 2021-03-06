<?php
/*
Template Name: Dancing Groot
*/
?>

<?php get_header();?>
			<div class="row"><!--row2-->
				<div class="col-md-10">
					<section>
						<div class="row"> <!--row3-->
							<div class="col-md-11 sep padding-bot">
								<article>
									<a href="#">
										<h2>Portrait de Cendrillon</h2>
									</a>
									<p class="mauve">Posté par Clémence, le 10 septembre 2014</p>
									<div class="row">
										<div class="col-md-2">
											<img src="images/cendrillon16.jpg" alt="Métamorphose de Cendrillon en princesse"class="img-circle small margin-sr">
										</div>
										<div class="col-md-10">
										<p class="text-justify alinea"> 
										On ne présente même plus Cendrillon, tant son prénom est devenu synonyme de conte de fée et d’ascenseur social. Souvent placée auprès de Blanche-Neige au panthéon des princesses potiches, elle n’a pourtant pas le rôle de demoiselle en détresse inactive qu’on lui prête. Elle ne se sort pas des ennuis toute seule, mais elle essaye ; et malgré ses attributs de princesse Disney – douceur, ardeur au travail, amitié avec tout un tas de bestioles – ce n’est pas une poire.</p>
										<a href="#" class="padding standard">Lire la suite</a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-11 sep padding-bot">
								<article>
									<a href="blog-article.html">
										<h2>Portrait de Blanche-Neige</h2>
									</a>
									<p class="mauve">Posté par Clémence, le 3 septembre 2014</p>
									<div class="row">
										<div class="col-md-2">
											<img src="images/blancheneige5.jpg" alt="Sommeil de Blanche-Neige"class="img-circle small left margin-sr">
										</div>
										<div class="col-md-10">
											<p class="text-justify alinea">A tout seigneur, tout honneur : la toute première princesse Disney, inspirée du célèbre conte des frères Grimm, est aussi une super potiche. Elle a tous les attributs de la princesse de conte de fée : belle, délicate, gentille et douce. Le studio lui apporte également quelques traits de personnalité qui deviennent la marque de fabrique des princesses Disney : une capacité innée à faire amie avec n’importe quelle boule de poils ou de plume et l’habitude de pousser la chansonnette pour un oui, pour un non, même – surtout ! – quand elle passe le balai. Pour que sa voix devienne tout à fait iconique, Walt Disney avait d'ailleurs fait passer à son interprète originale, Adriana Caselotti, un contrat très restrictif qui a saboté sa carrière au cinéma.</p>
											<a href="blog-article.html" class="padding standard">Lire la suite</a>
										</div>
									</div>
								</article>
							</div>
							<div class="col-md-11 sep padding-bot">
								<article>
									<a href="#">
									<h2>Pourquoi World War Z est-il un mauvais film ?</h2>
									</a>
									<p class="mauve">Posté par Clémence, le 25 septembre 2013</p>
									<div class="row">
										<div class="col-md-2">
											<img src="images/wwz-affiche.jpg" alt="Affiche de World War Z"class="img-circle small left margin-sr">
										</div>
										<div class="col-md-10">
											<p class="text-justify alinea">Oui, bon, ça va. Figurez-vous qu'à LJSF, une bonne partie de la rédac est absolument fan des oeuvres de Max Brooks, que ce soit le très drôle Guide de survie en territoire zombie ou World War Z, qui nous avait notamment marqué par son format inhabituel. Du coup, nous traînions tous des pieds pour aller voir l'adaptation à l'écran de ce livre, dont on ne nous avait pas dit que du bien.</p>
											<a href="#" class="padding standard">Lire la suite</a>
										</div>
									</div>
								</article>					
							</div>
							<div class="col-md-2 col-md-offset-9 padding"><p><a href="#">Page précédente</a></p></div>
							<?php
							    if ( get_next_posts_link() ) {
							      next_posts_link();
							    }
							  ?>
							  <?php
							    if ( get_previous_posts_link() ) {
							      previous_posts_link();
							    }
							  ?>
						</div><!--fermeture row3-->
					</section>
				</div><!--fermeture 10 col-->
				<div class="col-md-2">
					<aside>
						<h3>Newsletter</h3>
						<div>
					        <form action="index.html" method="post" class="subscribe-form">
					  			<input type="email" name="email" class="subscribe-input wide" placeholder="Email address" autofocus>
				    			<div>
					      			<button type="submit" class="subscribe-submit">S'inscrire</button>
					      		</div>
				  	 		</form>
				  	 	</div>
				   		<div class="padding">
				    		<h3>Où me trouver</h3>
				    		<div>
				   				<a href="http://www.ljsf.fr" target="blank">
									<img src="images/ljsf_logo.png" alt="les j3ux sont faits" class="half-wide">
								</a>
							</div class="padding-sm">
							<div>
				    			<a href="http://www.ljsf.fr" target="blank" class="standard">
									Les J3ux sont faits
								</a>				   			
							</div>
							<div class="padding">
								<a href="http://www.geekgirlpenpals.com" target="blank">
									<img src="images/iggppc_pride-glados-xs.jpg" alt="geek girl pen pals club" class="wide">
								</a>
							</div>
							<div class="padding">
						   		<a href="#"><i class="fa fa-facebook-square bcanard big"></i></a>
								<a href="#"><i class="fa fa-twitter-square bcanard big"></i></a>
								<a href="#"><i class="fa fa-google-plus-square bcanard big"></i></a>
								<a href="#"><i class="fa fa-pinterest bcanard big"></i></a>
							</div> <!--fermeture padding-->
							<div class="padding">
								<!-- Button trigger modal -->
								<button class="btn btn2" data-toggle="modal" data-target="#manifesto">
								<img src="images/iggppc_manifesto.jpg" class="wide">
								</button>
								<!-- Modal -->
								<div class="modal fade" id="manifesto" tabindex="-1" role="dialog" aria-labelledby="manifestoLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								        <h4 class="modal-title bold dpurple" id="manifestoLabel">Iggle Manifesto</h4>
								      </div>
								      <div class="modal-body text-align">
								      <img src="images/iggppc_manifesto.jpg" class="wide">
								      </div>
								      <div class="modal-footer">
								      </div>
								    </div>
								  </div>
							</div>
						</div> <!--fermeture padding-->
					</aside>
				</div> <!--fermeture 2 col-->
			</div><!--fermeture row2-->
			<div class="row">
		   		<footer class="clearfix twelve">© 2014 - Tous droits réservés</footer>
		    </div> <!--fermeture row-->
		</div> <!--fermeture row1-->
    </div> <!--container-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>