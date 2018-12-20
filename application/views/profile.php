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
				<!-- Cas : SI user sur son propre profil OU SI utilisateur qui n'a pas fait de projet avec OU SI utilisateur a déjà noté le profil -->
				<div class="avis">
					<img src="<?= base_url('assets/img/star')?>">
					<img src="<?= base_url('assets/img/star-empty')?>">
					<img src="<?= base_url('assets/img/star-empty')?>">
					<img src="<?= base_url('assets/img/star-empty')?>">
					<img src="<?= base_url('assets/img/star-empty')?>">
					<span class="nb-avis">X avis</span>
				</div>
				<!-- sinon si il peut noter -->
				<div class="avis">
					<a id="star-1" href=""><img src="<?= base_url('assets/img/star')?>"></a>
					<a id="star-2" href=""><img src="<?= base_url('assets/img/star')?>"></a>
					<a id="star-3" href=""><img src="<?= base_url('assets/img/star')?>"></a>
					<a id="star-4" href=""><img src="<?= base_url('assets/img/star')?>"></a>
					<a id="star-5" href=""><img src="<?= base_url('assets/img/star')?>"></a>
				</div>
			</div>

		</div>
	</div>
	<hr>
	<!--	Partie Privée utilisateur doit être log pour modifier -->
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
							<label for="job">Métier</label>
							<select class="form-control" id="job">
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
							<small class="form-text text-muted">Uploadez votre CV (format PDF)</small>
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
			<div class="row">
				<div class="col-md-6">
					<form id="form-formation" action="" method="post" class="form-group">
						<div class="form-group">
							<label for="formation">Formation</label>
							<input type="text" class="form-control" id="formation" placeholder="Votre formation ...">
							<button type="submit" class="btn btn-outline-primary"></button>
							<small class="form-text text-muted">Votre diplôme</small>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<form id="form-skill" action="" method="post" class="form-group">
						<div class="form-group">
							<label for="skills">Compétences</label>
							<input type="text" class="form-control" id="skills" placeholder="Vos compétences ...">
							<button type="submit" class="btn btn-outline-primary"></button>
							<small class="form-text text-muted">Vos compétences acquises</small>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</main>

<?php $this->load->view('shared/footer'); ?>
