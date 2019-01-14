<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page projet">
	<section class="container">
		<h1 class="main-title">{Projet.name}</h1>
		<div class="about-projet">
			<div class="description"><span>Description :</span> Lorem ipsum dolor sit amet, consectetur adipisicing
				elit. Aut magnam soluta
				voluptate? Delectus doloremque libero nihil suscipit temporibus voluptate voluptatem.
			</div>
			<div class="proprietaire"><span>Porteur du projet : </span>{Nom Prenom}</div>
			<div class="free"><span>Freelanceur(s) inscrits :</span>
				<ul>
					<li>Free A</li>
					<li>Free B</li>
				</ul>
			</div>
			<!-- Accessible si porteur du projet ou freelanceur inscrit-->
			<div>Jalons :</div>
			<ul class="jalons-list">
				<li class="jalon payed">04/01/2019</li>
				<li class="jalon payed">04/02/2019</li>
				<li class="jalon">04/03/2019</li>
				<li class="jalon">04/04/2019</li>
			</ul>

			<!-- Accessible pour le freelanceur non inscrit-->
			<div class="proposition-devis">
				<form action="" type="POST">
					<textarea placeholder="Postulez pour ce projet en écrivant un texte au porteur du projet..."></textarea>
					<button class="btn btn-outline-primary">Envoyer la proposition</button>
				</form>
			</div>
			<hr>
			<!-- Accessible pour tous-->
			<div class="devis-list">
				<div class="devis">
					<div class="user">
						<div class="name">PGM Freelancer</div>
						<div class="tarif">15 € / H</div>
						<div class="avis">Avis : {5} <img src="<?= base_url('/assets/img/star.svg') ?>"></div>
						<!-- Seulement pour un porteur de projet-->
						<a href="<?= base_url('messages') ?>" class="btn btn-outline-primary">Accepter</a>
					</div>
					<div
						class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit ipsum perspiciatis! Delectus ipsam labore minima nemo, quae quis voluptatem.</div>
				</div>
			</div>

		</div>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>

<script src="<?= base_url() ?>assets/js/mdvg.js"></script>

<!--visionner un projet-->

