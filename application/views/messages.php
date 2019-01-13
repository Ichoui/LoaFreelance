<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page landing-page messages">
	<section class="container">
		discussion mail classique
		partie haute = formulaire d'envoi de message (nom objet message)
		partie basse = réception de message (nom objet message)
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer');?>
