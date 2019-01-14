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
			<a href="<?= base_url('messages') ?>" class="btn btn-outline-primary">Contacter le porteur du projet</a>


		</div>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>


<!--visionner un projet-->

