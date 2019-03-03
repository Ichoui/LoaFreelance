<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page projet">
	<section class="container">
		<!--Barre de recherche pour moteur-->
		<div class="form-group" style="margin-top: 15px;">
			<div class="input-group">
				<span class="input-group-addon" style="padding-right: 10px;">Rechercher</span>
				<input type="text" name="search_text" id="search_text" placeholder="Rechercher un projet #KeyWord" class="form-control"/>
			</div>
		</div>
		<div class="consult-projet">
			<!-- Boucle affichage des projets renvoyée par le controller et affichée via rq ajax par javascript-->
		</div>
	</section>

</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>


<!--  CALL AJAX & JQUERY -->
<script>
	$(document).ready(function () {

		load_data();

		function load_data(query) {
			$.ajax({
				url: "<?php echo base_url(); ?>consultprojet/fetch",
				method: "POST",
				data: {query: query},
				success: function (data) {
					$('.consult-projet').html(data);
				}
			})
		}

		$('#search_text').keyup(function () {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			}
			else {
				load_data();
			}
		});
	});
</script>
