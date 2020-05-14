<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--Profil clients-->
<div class="jumbotron jumbotron-fluid  mb-5 px-1 px-md-3 py-3 text-center">
	<div class="container">
		<div class="card-deck">


		  <div class="card">
		    <div class="card-body">
		      <h4 class="card-title text-center font-weight-bold">Vous recherchez une formation</h4>
		      <p class="card-text text-center">
						Vous souhaitez améliorer votre maîtrise des technologies web ? Formez-vous dans les meilleures conditions : cours et exercices en lignes, vidéos, mentorat, etc...
					</p>
		    </div>
		    <div class="card-footer text-center">
		      <a href="<?base_url()?>/formation/" class="btn btn-success">Je recherche une formation</a>
		    </div>
		  </div>

		  <div class="card">
		    <div class="card-body">
		      <h4 class="card-title text-center font-weight-bold">Vous êtes un centre de formation</h4>
		      <p class="card-text text-center">
						Vous recherchez un formateur pour assurer des cours dans votre centre de formation ? Contactez-moi pour obtenir des détails sur mes compétences et disponibilités.
					</p>
		    </div>
		    <div class="card-footer text-center">
		      <a href="/formateur-developpement-web" class="btn btn-success">Je recherche un formateur</a>
		    </div>
		  </div>
		</div>
	</div>
</div>


<!-- Moodle -->
<div class="container my-5">
	<section>
		<div class="row">
			<div class="col-12 col-md-6">
				<h1>Espace web dédié à la formation</h1>
				<p>
					Les stagiaires ont accés à des cours et à des exercices sur une plateforme d'e-learning dédiée. J'utilise l'outil Moodle,
					à la pointe des solutions d'apprentissage en ligne, pour mettre à disposition des stagiaires le contenu de formation.
					<br />
					Cette plateforme comprends :
				</p>
				<ul>
					<li>des supports de cours</li>
					<li>des exercices</li>
					<li>un espace d'échange et de discussion (forum, messagerie, etc...)</li>
					<li>et bien plus encore</li>
				</ul>
				<p>
					Vous pouvez déjà découvrir l'espace de formation en ligne réservé aux stagiaires via la vidéo de présentation, ou bien y accéder directement.
				</p>
			</div>
			<div class="col-12 col-md-6 text-center">
				<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TtuLM6Lya3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
</div>



<!-- Cloud éleves -->
<div class="container my-5">
	<section>
		<div class="row">
			<div class="col-12 col-md-6 text-center">
				<img src="/dist/img/cloud-e-learning-formation-web.jpg" />
			</div>
			<div class="col-12 col-md-6">
				<h1>Un environnement de travail en ligne</h1>
				<p>
				Lorque les stagiaires réalisent des exercices durant la formation, ils peuvent les transférer vers un vrai
				espace web dédié. Ils pourront alors partager leurs travaux avec les autres stagiaires, ou bien s'en servir comme
				preuve de ce qu'ils ont déjà réalisé pendant leur formation.
				</p>
			</div>
		</div>
	</section>
</div>




<!--Galaxy-->
<section>
	<div class="jumbotron jumbotron-fluid mb-5 p-5 text-center">
		<h3>Apprendre, échanger, s'entraider... vous n'êtes pas seul à vous former !</h3>
		<p class="lead">
			Afin que chaque stagiaire en développement web puisse s'appuyer sur une communauté proche de son niveau de compétence, vous bénéficiez d'un ensemble de plateformes pour échanger et communiquer facilement entre vous, et avec votre formateur.
		</p>
		<div class="container">
			<div class="row">
			<? foreach($galaxy as $k => $service) { ?>
				<div class="col-6 col-md-3">
					<a href="<?=$service['url']?>" target="_blank">
						<img src="/dist/img/galaxy/<?=$service['img']?>" class="img-thumbnail" />
					</a>
					<br />
					<h5 class="mb-0"><?=$service['title']?></h5>
					<h6><?=$service['desc']?></h6>
					</h5>
				</div>
			<? } ?>
			</div>
		</div>
	</div>
</section>





<!--Détail technos-->
<div class="container mt-5">
	<section>
		<div class="row">
			<div class="col-sm-3 col-xs-12 text-center">
				<img src="/dist/img/formation-html.png" class="img-fluid" />
    	</div>
				<div class="col-sm-9 col-xs-12">
					<h2 id="formateur-html">Formation HTML</h2>
					<p>
						Le HTML est un des premiers langages que l'on apprends lorsque l'on veut travailler dans le web. C'est un des plus simples, mais aussi l'un des plus important, pour ne pas dire la clé de voûte de toute application web. Le découvrir et le
						manipuler est assez aisé, mais pour un novice, il va tout de même y avoir pas mal de choses à intégrer.
					</p>
					<a class="btn btn-success" href="/formation-developpeur-web/html" role="button">Contenu de la formation HTML</a>
				</div>
			</div>
</section>

<hr />

<section>
	<div class="row">
		<div class="col-sm-3 col-xs-12 text-center">
			<img src="/dist/img/formation-css.png" class="img-fluid" />
			</div>
			<div class="col-sm-9 col-xs-12">
				<h2 id="formateur-css">Formation CSS</h2>
				<p>
					Le CSS (pour Cascading Style Sheet, pour feuille de style en cascade) permet de gérer le rendu visuel de votre page web. Vous allez pouvoir définir différentes règles de style pour toutes les balises HTML présentent dans votre page. Le moteur
					de rendu graphique du navigateur va interpréter votre HTML, puis appliquer les différents styles que vous aurez créés via les règles CSS.
				</p>
				<a class="btn btn-success" href="/formation-developpeur-web/css" role="button">Contenu de la formation CSS</a>
			</div>
		</div>
</section>

<hr />

<section>
	<div class="row">
		<div class="col-sm-3 col-xs-12 text-center">
			<img src="/dist/img/formation-javascript.png" class="img-fluid" />
			</div>
			<div class="col-sm-9 col-xs-12">
				<h2 id="formateur-javascript">Formation Javascript</h2>
				<p>
					Le Javascript est un langage de programmation très utilisé dans l'environnement web. Il permet de faire énormément de choses, comme dynamiser vos pages web, récupérer des données provenant de sites extérieurs, et tout ce que l'on peux faire
					grâce
					à un vrai langage de programmation.
				</p>
				<a class="btn btn-success" href="/formation-developpeur-web/javascript" role="button">Contenu de la formation Javascript</a>
			</div>
		</div>
</section>

<hr />

<section class="mb-5">
	<div class="row">
		<div class="col-sm-3 col-xs-12 text-center">
			<img src="/dist/img/formation-php.png" class="img-fluid" />
    	</div>
			<div class="col-sm-9 col-xs-12">
				<h2 id="formateur-php">Formation PHP</h2>
				<p>Le langage PHP est un langage de programmation web back-end. Il sert notamment à dynamiser vos pages, à travailler avec des bases de données, et à prendre en charge toute la partie programmation côté serveur web.</p>
				<a class="btn btn-success" href="/formation-developpeur-web/php" role="button">Contenu de la formation PHP</a>
			</div>
		</div>
</section>
</div>





<!--Présentation julien-->
<section>
	<div class="jumbotron jumbotron-fluid mb-0 p-3">
		<div class="row">
			<div class="col-12 col-md-3 text-center">
				<img src="/dist/img/formateur-developpeur-web.jpeg" alt="" class="img-fluid img-thumbnail">
				<h2>Julien Buabent</h2>
			</div>
			<div class="col-12 col-md-9 text-center text-md-left">
				<h2>Développeur et formateur en développement web</h2>
				<p>
					Développeur web depuis 2009, je travail essentiellement avec les technologies HTML/CSS/JS/PHP.
					Après plusieurs années de pratique sur divers projets professionnels, j'anime aussi des formations de développeur web.
				</p>
				<button type="button" class="btn btn-success">06 73 85 48 39</button>
			</div>
		</div>
	</div>
</section>
