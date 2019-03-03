<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>


<body style="overflow: auto !important;">
<main class="page accueil">
	<section class="clean-block clean-hero">
		<div class="container-text">
			<h1>Postuler à des projets</h1>
			<p>Plateforme collaborative de A à Z &nbsp;:<br>mise en relation jusqu'au suivi des réalisations et des
				paiements d'un projet.</p>
			<p>Quelqu'un a besoin de vous ! Voici une pré-sélection de projets qui pourraient vous intéresser</p>

			<ul class="point-interet">
				<?php

					foreach ($last_project as $a_projet) {
						echo'
						<li>
							<a href="'.base_url('projet/getProject/'.$a_projet->id).'">'.$a_projet->name.' - <span>'.$a_projet->description.' | Compétences : '
							.$a_projet->contrainte_tech
							.'</span></a>
						</li>
						';
					}
				?>
			</ul>
			<a class="btn btn-outline-primary btn-lg" role="button" href="<?= base_url('consultprojet') ?>">Chercher un projet</a>
			<hr>
			<h1>Cherchez le Freelanceur idéal <br>pour votre projet</h1>
			<p>Voici les derniers utilisateurs inscrits sur notre plateforme :</p>
				<ul class="point-interet">
				<?php

				foreach ($last_free as $free) {
					echo '
						<li>
							<a href="'.base_url('profile').'">'.$free->first_name.' '.$free->last_name.'  <span></a>
						</li>
						';
				}
				?>
			</ul>
		</div>
	</section>
</main>

<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>

