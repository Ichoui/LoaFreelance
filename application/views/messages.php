<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page landing-page messages">
	<section class="container">
		<div class="email-part">

			<div class="mail">
				<div class="expediteur">expediteur</div>
				<div class="title">Titre</div>
			</div>
			<div class="mail">
				<div class="expediteur">expediteur</div>
				<div class="title">Titre</div>
			</div>
			<div class="mail">
				<div class="expediteur">expediteur</div>
				<div class="title">Titre</div>
			</div>
		</div>
		<div class="corps-text-part">
			<div class="header">
				<div class="expediteur">Nom de l'expediteur</div>
				<div class="title">Mon titre c'est de la daube</div>
				<div class="repondre">Répondre</div>
			</div>
			<div class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur blanditiis cumque debitis dignissimos distinctio dolor dolorem eos excepturi explicabo illo maiores minima molestiae nam natus nemo nihil non omnis optio placeat quasi quis .</div>
			<div class="reponse">
				<div class="close-reponse">Retourner au message</div>
				<form action="" type="POST">
					<textarea id="" placeholder="Votre réponse.."></textarea>
					<input type="file" multiple="multiple">
					<button class="btn btn-outline-primary">Envoyer</button>
				</form>
			</div>

		</div>
	</section>
</main>
<?php $this->load->view('shared/footer'); ?>
