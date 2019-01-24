<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page projet">
	<section class="container">
		<div class="add-projet">
			<form action="" type="POST">
				<label for="title-proj">Titre du projet :</label>
				<input type="text" id="title-proj" placeholder="Titre du projet...">
				<label for="tarif-proj">Tarif horaire (euros / heure)</label>
				<input type="number" step='1' id="tarif-proj" placeholder="Tarif / horaire du projet...">
				<label for="desc-proj">Description du projet</label>
				<textarea type="text" id="desc-projet" placeholder="Description du projet..."></textarea>
				<label for="skills-proj">Compétences recherchées</label>
				<!--<textarea type="text" id="skills-projet" placeholder="Description du projet..."></textarea>-->
				<select multiple>
					<?php

						foreach ($skills as $option) {
							echo "<option value=".$option->skills_name.">".$option->skills_name."</option>";
						}
					?>
				</select>
				<button class="btn btn-outline-primary" type="submit">Ajouter le projet</button>
			</form>
		</div>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>


<!--Une page où on peut publier un projet (recruteur)-->
