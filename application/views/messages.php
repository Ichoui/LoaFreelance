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
			<div class="header">
				<div id="title" class="expediteur"></div>
				<div id="object" class="title"></div>
				<div class="repondre">Répondre</div>
			</div>
			<div id="message" class="message"></div>
			<div class="reponse">
				<div class="close-reponse">Retourner au message</div>
				<form action="" type="POST">
					<textarea id="" placeholder="Votre réponse.."></textarea>
					<input type="file" multiple="multiple">
					<button class="btn btn-outline-primary">Envoyer</button>
				</form>
			</div> 
		</div>
		

		<!-- Ecrire un nouveau message à designer :p -->

	<!--form_open('messages/sendMessage'); -->
	<form>
	  		<div class="form-group">		    
		    <input type="email" id="input_email" placeholder="@Destinataire">
		  </div>
		  <div class="form-group">
		    <input  type="text" class="form-control" id="input_titre" placeholder="Titre">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="input_objet" placeholder="Object">
		  </div>
		  <div class="form-group">
		  <textarea class="form-control" rows="5" id="input_message" placeholder="message"></textarea>
		  </div>
		  <button id="btn_send_msg"class="btn btn-primary">Envoyé</button>
	<!--//form_close(); -->
</form>
<div id="statut_send"></div>
		<!-- Fin du btn -->
	</section>
</main>
<?php $this->load->view('shared/footer'); ?>

<!-- MOVE CALL AJAX & JQUERY -->

<script>
$(document).ready(function(){

	
function sendFromMessage(destinataire,titre,objet,message)
{
	$.ajax({
		url:"<?php echo base_url(); ?>messages/sendMessage",
		method:"POST",
		data:{destinataire:destinataire,
			 titre:titre,
			 objet:objet,
			 message:message
		},
		//dataType: 'JSON',
		success:function(data){
			//$('#statut_send').html(data);
			alert(data);
		}
	})
	return false;
}
 function load_data(id)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>messages/fetch",
   method:"POST",
   data:{id:id},
   dataType: 'JSON',
   success:function(data){ 	
    //$('.corps-text-part').html(data.id_expediteur);
    $('#title').html(data.title);
    $('#object').html(data.object);
    $('#message').html(data.message);
   }
  })
 }

	$('[id^=message_]').on('click',function(){
		var id = $(this).attr('id').replace("message_","");
		load_data(id);
	});

	$('#btn_send_msg').on('click', function(){
		sendFromMessage($('#input_email').val(),$('#input_titre').val(),$('#input_objet').val(),$('#input_message').val());
	});
	
});
</script>


