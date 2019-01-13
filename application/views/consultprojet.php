<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page projects">
	<section>
		<h1 class="main-title">{Projet.name}</h1>
		<div class="about">
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
		</div>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>


<!--Une page où on peut rechercher un projet (free)-->
