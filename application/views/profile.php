<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>
<?php //var_dump($currentUser);
//var_dump($allProject);?>
<main class="page profile ">
	<!--	 BOUTONS SWITCH-->
	<ul class="nav nav-tabs switch">
		<li class="nav-item">
			<a class="nav-link switcher profil active" href="#">Profil</a>
		</li>
		<li class="nav-item">
			<a class="nav-link switcher portfollio" href="#"><?php
		if($_SESSION['isPorteurProjet'] == 0)
		{
			echo "PortFolio";
		}
		else
		{
			echo "Mes Projets";
		}
		?></a>
		</li>
	</ul>
	<?php // var_dump($_SESSION); ?>
	<!-- SECTION USER PROFIL-->
	<section class="user-profil container">
		<div class="row">
			<div class="left col  col-md-4">
				<img src="https://preprod-anie.jump-biz.com//media/avatars/clipart/avatar10.jpg">
			</div>
			<div class="right col-md-6">
				<div class="identity">
					<div class="names">
						<p class="nom"><span>Nom :</span> <?= $currentUser['last_name'] ?></p>
						<p class="prenom"><span>Prénom : </span><?= $currentUser['first_name'] ?></p>
					</div>
					<hr>
					<p class="job"><span>Métier </span> <?= ' ' ?></p>
					<p class="tarif"><span>Tarif/horaire :</span> <?= $currentUser['hourly_rate'] ?: 'not_set'; ?> €/h</p>
					<p class="skill"><span>Compétences :</span>
						<?php $skills = explode(';', $currentUser['skills']); ?>
						<?php foreach($skills as $skill): ?>
							<p> - <?= $skill ?></p>
					  <?php endforeach; ?>
					</p>
					<p class="formation"><span>Formation :</span>
						<ul>
							<?php foreach($formations as $formation): ?>
									<li> <?= $formation->libelle_formation ?> </li>
							<?php endforeach; ?>
						</ul>
					</p>
					<p class="cv"><span>Curriculum Vitae :</span> <a href="#" target="_blank">Télécharger</a></p>
					<p class="description"><span>Description :</span><?= $currentUser['description'] ?></p>
					<!-- Cas : SI user sur son propre profil OU SI utilisateur qui n'a pas fait de projet avec OU SI utilisateur a déjà noté le profil -->
					<div class="avis">
						<img src="<?= base_url('assets/img/star.svg') ?>">
						<img src="<?= base_url('assets/img/star-empty.svg') ?>">
						<img src="<?= base_url('assets/img/star-empty.svg') ?>">
						<img src="<?= base_url('assets/img/star-empty.svg') ?>">
						<img src="<?= base_url('assets/img/star-empty.svg') ?>">
						<span class="nb-avis">51 avis</span>
					</div>
					<!-- sinon si il peut noter -->
					<div class="avis">
						<a id="star-1" href=""><img src="<?= base_url('assets/img/star.svg') ?>"></a>
						<a id="star-2" href=""><img src="<?= base_url('assets/img/star.svg') ?>"></a>
						<a id="star-3" href=""><img src="<?= base_url('assets/img/star.svg') ?>"></a>
						<a id="star-4" href=""><img src="<?= base_url('assets/img/star.svg') ?>"></a>
						<a id="star-5" href=""><img src="<?= base_url('assets/img/star.svg') ?>"></a>
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
	</section>

	<!--	 SECTION PORTFOLLIO-->
	<section class="user-porfollio container">
		<h1 class="text-center">Mes Projets</h1>

		<?php
		/*
		if($_SESSION['isPorteurProjet'] == 0)
		{
			echo '<p class="text-center">Vous trouverez ici une liste de tous les projets réalisés par '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'</p>';
		}
		else
		{
			echo '<p class="text-center">Vous trouverez ici une liste de tous les projets portés par '.$_SESSION['first_name'].' '.$_SESSION['last_name'].'</p>';
		}
		*/
		?>
		<div class="block-projets">
			<?php
			//var_dump($allProject);

				foreach ($allProject as $project) {
				echo '
				<div class="projet">
					<h2 class="nom-projet">'.$project->name.'</h2>
					<p>'.$project->description.'</p>
					<a href="<?= base_url(\'projet\') ?>" class="btn btn-outline-primary" target="_blank">Accéder</a>
				</div>';
			}
			?>
		</div>
	</section>
</main>

<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>

<!--
 Quand on a le statut de recruteur, on ne peut voir que la partie haute ainsi que le portfollio des réalisations.
 -->
