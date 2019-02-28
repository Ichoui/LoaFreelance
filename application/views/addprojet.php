<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page projet">
	<section class="container">
		<div class="add-projet">
			<!--<form action="" type="POST">-->
					<?php echo $_SESSION['id'];?>
				<?php 
					echo form_open('Addprojet/data_submitted');
					echo '<label for="title-proj">Titre du projet :</label>';

					$title_projet = array(
						'name' => 'title_proj',
						'placeholder' => 'Titre du projet..'
					);

					echo form_input($title_projet);

					echo '<label for="tarif-proj">Tarif horaire (euros / heure)</label>';
					echo '<input type="number" step=\'1\' id="tarif-proj" name="tarif_horaire" placeholder="Tarif / horaire du projet...">';
					echo '<label for="desc-proj">Description du projet</label>';
					echo '<textarea name="description" type="text" id="desc-projet" placeholder="Description du projet..."></textarea>';
					echo '<label for="skills-proj">Compétences recherchées</label>';
					echo '<select name="skills[]" multiple>';

					foreach ($skills as $option) {
							echo "<option value=".$option->skills_name.">".$option->skills_name."</option>";
						}
				
					echo'</select>';

					$btn_submit = array(
						'type' => 'submit',
						'value' => 'Publier le projet',
						'class' => 'btn btn-outline-primary'
					);
					echo form_submit($btn_submit);
					echo form_close();

					if(isset($title_proj) && isset($description)){
						echo "<div id='content_result'>";
						echo "<h3 id='result_id'>Projet soumis</h3><br/>";
						echo "<h4 id='result_id'>Les freelancers peuvent désormais postuler</h4><br/><hr>";
						echo "<div id='result_title'>";
						echo "<strong><label class='label_output'>Titre Projet : </label></strong>"." ".$title_proj;
						echo '</div>';
						echo "<div id='result_description'>";
						echo "<strong><label class='label_output'>Description Projet : </label></strong>". " ".$description;
						echo "</div>";
						echo "<div id='result_skills'>";
						echo "<strong><label class='label_output'>Skills : </label></strong>". " ".$competences;
						echo "</div>";
						echo "</div>";
					} 

				?>
				
				<!--<input type="text" id="title-proj" placeholder="Titre du projet...">-->
				<!--<label for="tarif-proj">Tarif horaire (euros / heure)</label>-->
				<!--<input type="number" step='1' id="tarif-proj" placeholder="Tarif / horaire du projet...">-->
				<!--<label for="desc-proj">Description du projet</label>-->
				<!--<textarea type="text" id="desc-projet" placeholder="Description du projet..."></textarea>-->
				<!--<label for="skills-proj">Compétences recherchées</label>-->
				<!--<textarea type="text" id="skills-projet" placeholder="Description du projet..."></textarea>-->
				<!--<select multiple>

					<?php
					/*
						foreach ($skills as $option) {
							echo "<option value=".$option->skills_name.">".$option->skills_name."</option>";
						}
					*/
					?>
				</select>
				<button class="btn btn-outline-primary" type="submit">Ajouter le projet</button>
			</form>-->
		</div>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>


<!--Une page où on peut publier un projet (recruteur)-->
