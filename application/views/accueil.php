<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<body style="overflow: hidden;">
<main class="page accueil">
	<!--	Visible que par le freelancer -->
	<section class="clean-block clean-hero freelancer-part">
		<div class="container-text">
			<h1>Postuler à des projets</h1>
			<p>Plateforme collaborative de A à Z &nbsp;:<br>mise en relation jusqu'au suivi des réalisations et des
				paiements d'un projet.</p>
			<p>Quelqu'un a besoin de vous ! Voici une pré-sélection de projets qui pourraient vous intéresser</p>

			<ul class="point-interet">
				<li>
					<a href="<?= base_url('projet') ?>">Projet A - <span>{description-projet-abcdefgb}</span></a>
				</li>
				<li>
					<a href="<?= base_url('projet') ?>">Projet B - <span>{description-projet-abcdefgb}</span></a>
				</li>
				<li>
					<a href="<?= base_url('projet') ?>">Projet C - <span>{description-projet-abcdefgb}</span></a>
				</li>
				<li>
					<a href="<?= base_url('projet') ?>">Projet D - <span>{description-projet-abcdefgb}</span></a>
				</li>
			</ul>
			<a class="btn btn-outline-primary btn-lg" role="button" href="<?= base_url('consultprojet') ?>">Chercher un projet</a>
		</div>
	</section>

	<!--	Visible que par le recruteur-->
	<!--	<section class="clean-block clean-hero recruteur-part">
		<div class="container-text">
			<h1>Cherchez le Freelanceur idéal <br>pour votre projet</h1>
			<p>Plateforme collaborative de A à Z&nbsp;:<br>mise en relation jusqu'au suivi des réalisations et des
				paiements d'un projet.</p>
			<p>Voici les derniers utilisateurs inscrits sur notre plateforme :</p>
			<ul class="list-new-free">
				<li>
					<a href="<?= base_url('profile') ?>">Stéphane Tartidou - {5}</a>
					<img src="<?= base_url('assets/img/star.svg') ?>">
				</li>
				<li>
					<a href="<?= base_url('profile') ?>">Eude Le Petit - {5}</a>
					<img src="<?= base_url('assets/img/star.svg') ?>">
				</li>
				<li>
					<a href="<?= base_url('profile') ?>">Michel Vedette - {5} </a>
					<img src="<?= base_url('assets/img/star.svg') ?>">
				</li>
				<li>
					<a href="<?= base_url('profile') ?>">Bertrand Quichaud - {5}</a>
					<img src="<?= base_url('assets/img/star.svg') ?>">
				</li>
			</ul>
		</div>
	</section>-->
</main>

<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>

