<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page landing-page messages">
	<section class="container">
		<div class="email-part">
			<div class="mail">
				<div class="title">Titre</div>
				<div class="description">Description</div>
			</div>
			<div class="mail">
				<div class="title">Titre</div>
				<div class="description">Description</div>
			</div>
			<div class="mail">
				<div class="title">Titre</div>
				<div class="description">Description</div>
			</div>
		</div>
		<div class="corps-text-part">
			<div class="header">
				<div class="title">Title</div>
				<div class="objet">Objet :Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, fugit! Objet</div>
				<div class="repondre">Répondre</div>
			</div>
			<div
				class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur blanditiis cumque debitis dignissimos distinctio dolor dolorem eos excepturi explicabo illo maiores minima molestiae nam natus nemo nihil non omnis optio placeat quasi quis reprehenderit sapiente sunt tempora, veniam voluptatem.</div>
			<div class="reponse">
				<div class="close-reponse">Retourner au message</div>
				<form action="" type="POST">
					<textarea id="" placeholder="Votre réponse.."></textarea>
					<button class="btn btn-outline-primary">Envoyer</button>
				</form>
			</div>

		</div>
	</section>
</main>
<?php $this->load->view('shared/footer'); ?>
