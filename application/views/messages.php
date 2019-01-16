<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page landing-page messages">
	<section class="container">
		<div class="email-part">
			<?php
				foreach ($messages as $row) {

					$date = new DateTime($row->date_send);					

					echo'<div id="message_'.$row->id.'" class="mail">
						 	<div class="expediteur">'.$row->first_name.' '.$row->last_name.' | '.$date->format('d/m/Y H:i').'</div>
						    <div class="title">'.$row->title.'</div>
						 </div>';
				}
			?>
		</div>
		
		<div class="corps-text-part">
			<!--
			<div class="header">
				<div id="title" class="expediteur">Nom de l'expediteur</div>
				<div id="object" class="title">Mon titre c'est de la daube</div>
				<div class="repondre">Répondre</div>
			</div>
			<div id="message" class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur blanditiis cumque debitis dignissimos distinctio dolor dolorem eos excepturi explicabo illo maiores minima molestiae nam natus nemo nihil non omnis optio placeat quasi quis .</div>
			<div class="reponse">
				<div class="close-reponse">Retourner au message</div>
				<form action="" type="POST">
					<textarea id="" placeholder="Votre réponse.."></textarea>
					<input type="file" multiple="multiple">
					<button class="btn btn-outline-primary">Envoyer</button>
				</form>
			</div> -->
		</div>
	
	</section>
</main>
<?php $this->load->view('shared/footer'); ?>

<!-- MOVE CALL AJAX & JQUERY -->

<script>
$(document).ready(function(){

 function load_data(id)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>messages/fetch",
   method:"POST",
   data:{id:id},
   success:function(data){
    $('.corps-text-part').html(data);
   }
  })
 }


$('[id^=message_]').on('click',function(){
	var id = $(this).attr('id').replace("message_","");
	load_data(id);
});
/*
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });*/
});
</script>


