<nav class="navbar navbar-light navbar-expand-lg fixed-top clean-navbar">
	<div class="container"><a class="navbar-brand logo" href="#">Freelance.com</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"></span><span
				class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse"
			 id="navcol-1">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item" role="presentation">
					<a class="nav-link" href="<?= base_url('accueil') ?>" title="Accueil">Accueil</a>
				</li>
				<li class="nav-item" role="presentation">
						<a class="nav-link" href="<?= base_url('addprojet') ?>" title="Ajouter un projet">Ajouter projet</a>
					</li>
				<li class="nav-item" role="presentation">
						<a class="nav-link" href="<?= base_url('consultfreelancer') ?>" title="Freelancers">Freelancers</a>
				</li>
				<li class="nav-item" role="presentation">
							<a class="nav-link" href="<?= base_url('consultprojet') ?>" title="Rechercher projets">Rechercher projet</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" href="<?= base_url('messages') ?>" title="Votre boite mail">Messagerie</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" href="<?= base_url('/') ?>" title="Votre profil">DECONNEXION</a>
				</li>
			</ul>
			<div class="nav navbar-nav navbar-right">
				<a class="nav-link" href="<?= base_url('profile') ?>"><img
						src="https://preprod-anie.jump-biz.com//media/avatars/clipart/avatar10.jpg"
						alt="ImageGoogle"></a>
			</div>
		</div>
	</div>
</nav>
