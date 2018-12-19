<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page profile">
	<section class="left">
		<img src="http://api.ichoui.fr/maple/IMG_7293.JPG">
	</section>
	<section class="right">
		<div class="identity">
			<p class="prenom">Prénom : {google.prenom}</p>
			<p class="nom">Nom : {google.nom}</p>
			<p class="tarif">Tarif horaire : {user.tarif}</p>
		</div>
	</section>
</main>

<?php $this->load->view('shared/footer'); ?>
