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
				<!--				 Doit disparaitre -->
				<li class="nav-item" role="presentation">
					<a class="nav-link" href="<?= base_url('projet') ?>" title="Vos projets">P</a>
				</li>
				<!-- Pour le role de Porteur de projet -->
				<?php
				if($_SESSION['isPorteurProjet'] == 1)
				{
					echo'
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="<?= base_url(\'addprojet\') ?>" title="Ajouter un projet">Ajouter projet</a>
					</li>';
				}
				?>
				<!-- Pour le role de Free -->
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
						src="https://gitlab.com/uploads/-/system/user/avatar/3073155/avatar.png?width=400"
						alt="ImageGoogle"></a>
			</div>
		</div>
	</div>
</nav>
