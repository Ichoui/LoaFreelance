<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu_notlogged', $place); ?>

<main class="page login-page">
	<section class="clean-block clean-form dark">
		<div class="container">
			<div class="block-heading">
				<h2 class="text-info">Connexion</h2>
				<p>Utilisez vos identifiants pour vous connecter ci-dessous.</p>
			</div>
			<?= validation_errors(); ?>
			<div class="text-center">
				<?= form_open('login/connexion') ?>
					<div class="form-group"><input class="form-control item" type="email" name="email" placeholder="Email" id="email"></div>
					<input class="form-control" type="password" name="password" placeholder="Mot de passe" id="password">
					<input class="btn btn-primary btn-block" type="submit"  name="submit" style="background-color: #49c5b6;margin-top: 10px;" value="Connexion" />
					<p style="margin: 15px 0;">Pas encore inscrit ?</p>
					<a class="btn btn-primary btn-block" role="button" href="<?= base_url('registration') ?>" style="background-color: #49c5b6;margin-top: 10px;">S'enregistrer</a>
				</form>
			</div>
		</div>
	</section>
</main>

<?php $this->load->view('shared/footer'); ?>
