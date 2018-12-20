<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<body style="overflow: hidden;">
<main class="page dashboard">
	<section class="clean-block clean-hero">
		<div class="container-text">
			<h1>Postuler à des projets</h1>
			<p>Plateforme collaborative de A à Z &nbsp;:<br>mise en relation jusqu'au suivi des réalisations et des paiements d'un projet.</p>
			<p>Quelqu'un a besoin de vous ! Cliquez sur le bouton ci-dessous pour recherche un projet à la hauteur de vos compétences.</p>
			<a class="btn btn-outline-primary btn-lg" role="button" href="<?= base_url('projects') ?>">Chercher un projet</a>
		</div>
		<div class="container-text">
			Votre liste de projet en cours :
			<ul>
				<li>Projet Petit</li>
				<li>Projet Quichaud</li>
				<li>Projet Tartidou</li>
				<li>Projet Vedette</li>
			</ul>
		</div>
	</section>
</main>

<?php $this->load->view('shared/footer'); ?>
