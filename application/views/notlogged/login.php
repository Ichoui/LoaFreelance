<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menubar_notlogged', $place); ?>

<main class="page login-page">
	<section class="clean-block clean-form dark">
		<div class="container">
			<div class="block-heading">
				<h2 class="text-info">Connexion</h2>
				<p>Choississez la solution qui vous convient ci-dessous pour vous connecter.</p>
			</div>
			<form class="text-center">
				<button class="btn btn-primary" type="button" style="background-color: #0073b1;margin-bottom: 10px;">Linkedin Connexion</button>
				<p class="text-center">ou</p>
				<div class="form-group"><input class="form-control item" type="email" placeholder="Email" id="email"></div>
				<input class="form-control" type="password" placeholder="Mot de passe" id="password">
				<button class="btn btn-primary btn-block" type="submit" style="background-color: #49c5b6;margin-top: 10px;">Connexion</button>
				<p style="margin: 15px 0;">Pas encore inscrit ?</p>
				<a class="btn btn-primary btn-block" role="button" href="<?= base_url('registration') ?>" style="background-color: #49c5b6;margin-top: 10px;">S'enregistrer</a>
			</form>
		</div>
	</section>
</main>

<?php $this->load->view('shared/footer'); ?>
