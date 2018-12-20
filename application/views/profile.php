<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page profile ">
	<div class="row">
		<div class="left col  col-md-4">
			<img src="http://api.ichoui.fr/maple/IMG_7293.JPG">
		</div>
		<div class="right col-md-6">
			<div class="identity">
				<p class="prenom"><span>Prénom : </span>{google.prenom}</p>
				<p class="nom"><span>Nom :</span> {google.nom}</p>
				<hr>
				<p class="tarif"><span>Tarif/horaire :</span> {user.tarif}</p>
				<p class="description"><span>Description :</span> {user.description}</p>
				<!--			<p class="tarif"><span>Tarif/horaire :</span> {user.tarif}</p>-->
				<p class="cv"><span>Curriculum Vitae :</span></p>
			</div>

		</div>
	</div>
	<hr>
	<div class="row">
		<div class="bottom">
			<form action="" method="post" class="form-group">
				<div class="form-group">
					<label for="tarif">Tarif/horaire</label>
					<input type="number" step="0.5" class="form-control" id="tarif" placeholder="Votre tarif/horaire ...">
					<small class="form-text text-muted">Exprimé en € /h</small>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<input type="email" class="form-control" id="description" placeholder="Votre description ...">
					<small class="form-text text-muted">Une petite description de vous ?</small>
				</div>
				<button class="btn btn-outline-primary">Mettre à jour</button>
			</form>
		</div>
	</div>
</main>

<?php $this->load->view('shared/footer'); ?>
