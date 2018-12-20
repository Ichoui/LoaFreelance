<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page profile ">
	<div class="row">
		<div class="left col  col-md-4">
			<img src="http://api.ichoui.fr/maple/IMG_7293.JPG">
		</div>
		<div class="right col-md-6">
			<div class="identity">
				<div class="names">
				<p class="nom"><span>Nom :</span> {google.nom}</p>
				<p class="prenom"><span>Prénom : </span>{google.prenom}</p>
				</div>
				<hr>
				<p class="job"><span>Métier </span> {user.métier}</p>
				<p class="tarif"><span>Tarif/horaire :</span> {user.tarif}</p>
				<p class="cv"><span>Curriculum Vitae :</span> <a href="#" target="_blank">Visionnez votre cv</a></p>
				<p class="description"><span>Description :</span> {user.description}</p>
			</div>

		</div>
	</div>
	<hr>
	<div class="bottom">
		<p class="text-center">Mettez à jours vos informations dans les champs ci-dessous</p>
		<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form id="form-tarif" action="" method="post" class="form-group">
					<div class="form-group">
						<label for="tarif">Tarif/horaire</label>
						<input type="number" step="0.5" class="form-control" id="tarif" placeholder="Votre tarif/horaire ...">
						<button type="submit" class="btn btn-outline-primary"></button>
						<small class="form-text text-muted">Exprimé en € /h</small>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<form id="form-job" action="" method="post" class="form-group">
					<div class="form-group">
						<label for="description">Métier</label>
						<select class="form-control" id="sel1">
							<option>Développeur</option>
							<option>Cuisinier</option>
							<option>Daesh</option>
							<option>Danseur-étoile</option>
						</select>
						<button type="submit" class="btn btn-outline-primary"></button>
						<small class="form-text text-muted">Quel métier exercez-vous</small>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form id="form-cv" action="" method="post" class="form-group">
					<div class="form-group">
						<label for="cv">Curriculum Vitae</label>
						<input type="file" class="form-control" id="cv" accept="application/pdf">
						<button type="submit" class="btn btn-outline-primary"></button>
						<small class="form-text text-muted">Uploadez votre CV</small>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<form id="form-description" action="" method="post" class="form-group">
					<div class="form-group">
						<label for="description">Description</label>
						<textarea type="text" class="form-control" id="description" placeholder="Votre description ..."></textarea>
						<button type="submit" class="btn btn-outline-primary"></button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</main>

<?php $this->load->view('shared/footer'); ?>
