<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>
<main class="page projet">
	<section class="container">
		<h1 class="main-title"><?php echo $title; ?></h1>
		<div class="about-projet">
			<div class="description"><span>Description : </span><?php echo $description; ?>
			</div>
			<div class="proprietaire"><span>Porteur du projet : </span><?php echo $last_name . ' ' . $first_name; ?></div>
			<div class="free skills">
				<span>Compétence(s) requise(s) : </span>
				<ul>
					<?php
					echo $contrainte_tech;
					?>
				</ul>
			</div>
			<div class="free">
				<span>Freelanceur(s) inscrits :</span>
				<ul>
					<?php
					$displayCandidate = TRUE;
					if (isset($freelancer_inscrit)) {
						if ($freelancer_inscrit->num_rows() > 0) {
							foreach ($freelancer_inscrit->result() as $a_freelanceur) {
								if ($a_freelanceur->id_user == $_SESSION['id']) {
									$displayCandidate = FALSE;
								}
								echo '<li>' . $a_freelanceur->first_name . ' ' . $a_freelanceur->last_name . '</li>';
							}
						} else {
							echo 'Aucun Freelanceur n\'est actuellement inscrit sur ce projet';

						}
					}
					?>
				</ul>
			</div>
			<!-- Accessible si porteur du projet ou freelanceur inscrit-->
			<?php
			if ($statut != "IN_SEARCH") {
				if ($statut != "CLOSED") {
					echo '
                    <div>Jalons :</div>
                    <ul class="jalons-list">';
					foreach ($lesJalonsDuProjet as $a_j) {
						if ($a_j->statut == "UNPAYED") {
							echo '<li class="jalon">' . $a_j->deadline . '  ' . $a_j->libelle . ' ' . $a_j->cout . '<div id="paypal-button-container"></div></li>';
						} else {
							echo '<li class="jalon payed">' . $a_j->deadline . ' ' . $a_j->libelle . ' ' . $a_j->cout . '<div id="paypal-button-container"></div></li>';
						}
					}
					echo '</ul>';
				}
			}
			?>

			<?php
			if ($statut === "CLOSED") {
				echo '<div class="orange">Ce projet est actuellement indiqué comme terminé et livré.</div>';
			}
			?>

			<!-- Accessible pour le freelanceur non inscrit-->
			<?php
			if ($_SESSION['id'] != $lePorteurDuProjet) {
				if ($displayCandidate) {
					echo '<div class="proposition-devis">
            <form class="sendCandidate" type="POST" id="' . $_SESSION['id'] . '_' . $id_project . '_postuler">
              <textarea name="msg_input" id="msg_input" placeholder="Postulez pour ce projet en écrivant un texte au porteur du projet..."></textarea>';
					$btn_submit = array(
						'type' => 'submit',
						'value' => 'Envoyer la proposition',
						'class' => 'btn btn-outline-primary');
					echo form_submit($btn_submit);
					echo '</form>
            </div>';
				}
			}
			?>
			<?php
			if ($_SESSION['id'] == $lePorteurDuProjet) {
				if (isset($freelanceur_candidate)) {
					if ($freelanceur_candidate->num_rows() > 0) {
						echo '
                    <!-- Accessible pour tous-->
                     <div class="devis-list">';
						foreach ($freelanceur_candidate->result() as $a_freelanceur_c) {
							echo '
                         <div class="devis">
                            <div class="user">
                              <div class="name">' . $a_freelanceur_c->first_name . ' ' . $a_freelanceur_c->last_name . '</div>
                              <div class="tarif">xx € / H</div>
                              <div></div>
                              <form id="' . $a_freelanceur_c->id_user . '_' . $id_project . '_validate" class="form_accepte_free" method="post">';
							echo '
               
                              <!-- Seulement pour un porteur de projet-->
                              <!--<a class="btn btn-outline-primary">Accepter</a>-->';
							$btn_submit = array(
								'type' => 'submit',
								'value' => 'Accepter',
								'class' => 'btn btn-outline-primary');
							echo form_submit($btn_submit);
							echo form_close();
							echo '  </div>
                              <div class="msg">' . $a_freelanceur_c->msg . '</div>
                              </div>';
						}
						echo '</div>';
					}
				}


				if ($statut == "IN_SEARCH") {
					echo '
        <!-- Large modal -->
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Démarrer le projet</button>


        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un jalon <button id="add_jalon" type="button" class="btn btn-outline-primary">+</button></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">
                    <form id="form_jalon">

                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary" id="launch-projet-modal">Lancer Projet</button>
                    </form>
                 </div>
              </div>
           </div>
        </div>
        ';
				} else {
					if ($statut != "CLOSED") {
						echo '
        <!-- Large modal -->
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-close-project">Clôturer le projet</button>
        ';
					}
					echo '
        <div class="modal fade bd-example-modal-close-project" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notes & Commentaires</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body">
                    <form id="feedback_projet" method="POST" action="' . base_url('Projet/ClotureProjet') . '" >';
					if (isset($freelancer_inscrit)) {
						if ($freelancer_inscrit->num_rows() > 0) {
							//var_dump($freelancer_inscrit);
							foreach ($freelancer_inscrit->result() as $a_freelanceur) {
								echo '<div id="free_' . $a_freelanceur->id . '" class="row">';
								echo '<div class="col">';
								echo '<p>' . $a_freelanceur->first_name . ' <b>' . $a_freelanceur->last_name . '</b></p>
                                <input type="hidden" value="' . $a_freelanceur->id . '">
                                ';
								echo '</div>';
								echo '<div class="col">';
								echo '<input type="text" name="Comment" class=form-control placeholder="Comment...">';
								echo '</div>';
								echo '<div class="col">';
								echo '<input type="text" name="note" class=form-control placeholder="1">';
								echo '</div>';
								echo '</div>';

							}
						}
					}
					echo '
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary" id="cloturer-projet">Cloturer le projet</button>
                    </form>
                 </div>
              </div>
           </div>
        </div>
        ';
				}
			}
			?>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>
<script src="<?= base_url() ?>assets/js/mdvg.js"></script>
<script>
	$(document).ready(function () {
		var idBtn = 1;
		$('#add_jalon').on('click', function (e) {
			$('#form_jalon').append('<div class="row" id="row_' + idBtn + '"><div class="col"><input type="textarea" class="form-control" ' +
				'placeholder="Libelle Jalon"></div><div id="2" class="col"><input type="date" class="form-control"></div><div id="3" class="col"><input ' +
				'type="text" class="form-control" placeholder="Coût 0€00"></div><div id="4" class="col"><button type="button" id="btnid_' + idBtn + '" ' +
				'class="btn btn-outline-primary btn_delete_row_ok">x</button></div></div><hr id="ligne_' + idBtn + '">');

			idBtn = idBtn + 1;
		});


		$(document).on("click", "button", function () {
			if (this.id.indexOf("btnid_") >= 0) {
				//alert(this.id);
				var idSplit = this.id.split("_");
				//alert(idSplit[1]);
				$("#row_" + idSplit[1]).remove();
				$("#ligne_" + idSplit[1]).remove();
			}
		});

		$('form#form_jalon').submit(function (event) {

			var allIsComplete = "TRUE";
			var allInputs = "";

			$("form#form_jalon :input").each(function () {

				var input = $(this);
				if (input.attr('type') == "textarea" || input.attr('type') == "text" || input.attr('type') == "date") {
					allInputs = allInputs + input.val() + ";";
					if (input.val().length == 0) {
						allIsComplete = "FALSE";
					}
				}
			});
			if (allIsComplete == "TRUE") {
				console.log("je peux push ");

				var formData = {
					'allJalons': allInputs,
					'id_project': "<?php echo $id_project; ?>"
				};

				// process the form
				$.ajax({
					type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
					url: "<?php echo base_url();?>" + "Projet/RunProjetValidateAddJalon", // the url where we want to POST
					data: formData, // our data object
					dataType: 'text', // what type of data do we expect back from the server
					encode: true
				})
				// using the done promise callback
					.done(function (data) {

						// log data to the console so we can see
						console.log(data);

						// here we will handle errors and validation messages
					});

				// stop the form from submitting the normal way and refreshing the page
				event.preventDefault();


			}
			else {
				alert("Merci de renseigner tous les jalons, les champs doivent être non vide");
				allInputs = "";
			}
		});


		// process the form
		$('#feedback_projet').submit(function (event) {


			var allInputs = "";

			$("form#feedback_projet :input").each(function () {

				var input = $(this);

				if (input.attr('type') == "text" || input.attr('type') == "hidden") {
					allInputs = allInputs + input.val() + ";";
				}
			});
			console.log(allInputs);
			var formData = {
				'allNotations': allInputs,
				'project_id': "<?php echo $id_project; ?>",
				'user_push': "<?php echo $_SESSION['id']; ?>"
			};


			// process the form
			$.ajax({
				type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
				url: "<?php echo base_url();?>" + "Projet/ClotureProjet", // the url where we want to POST
				data: formData, // our data object
				dataType: 'json', // what type of data do we expect back from the server
				encode: true
			})
			// using the done promise callback
				.done(function (data) {

					// log data to the console so we can see
					console.log(data);

					// here we will handle errors and validation messages
				});

			// stop the form from submitting the normal way and refreshing the page
			event.preventDefault();
		});


		$('.sendCandidate').submit(function (event) {
			var user_project = $(this).attr('id').split("_");
			if (user_project[2] == "postuler") {
				console.log("ok");
				//console.log("user" + user_project[0]);
				//console.log("project" + user_project[1]);
				// get the form data
				// there are many ways to get this data using jQuery (you can use the class or id also)

				var formData = {
					'id_project': user_project[1],
					'id_user': user_project[0],
					'msg': $('textarea#msg_input').val(),
				};

				// process the form
				$.ajax({
					type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
					url: "<?php echo base_url();?>" + "Projet/SendCandidature", // the url where we want to POST
					data: formData, // our data object
					dataType: 'json', // what type of data do we expect back from the server
					encode: true
				})
				// using the done promise callback
					.done(function (data) {

						// log data to the console so we can see
						console.log(data);

						// here we will handle errors and validation messages
					});

				// stop the form from submitting the normal way and refreshing the page
				event.preventDefault();
			}
		});
		// process the form
		$('.form_accepte_free').submit(function (event) {
				var user_project = $(this).attr('id').split("_");
				if (user_project[2] == "validate") {
					//console.log("user" + user_project[0]);
					//console.log("project" + user_project[1]);
					// get the form data
					// there are many ways to get this data using jQuery (you can use the class or id also)

					var formData = {
						'id_project': user_project[1],
						'id_user': user_project[0]
					};

					// process the form
					$.ajax({
						type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
						url: "<?php echo base_url();?>" + "Projet/addNewValidateCandidateFreelanceur", // the url where we want to POST
						data: formData, // our data object
						dataType: 'json', // what type of data do we expect back from the server
						encode: true
					})
					// using the done promise callback
						.done(function (data) {

							// log data to the console so we can see
							console.log(data);

							// here we will handle errors and validation messages
						});

					// stop the form from submitting the normal way and refreshing the page
					event.preventDefault();
				}
				if (user_project[2] == "postuler") {
					console.log("ok");
					//console.log("user" + user_project[0]);
					//console.log("project" + user_project[1]);
					// get the form data
					// there are many ways to get this data using jQuery (you can use the class or id also)

					var formData = {
						'id_project': user_project[1],
						'id_user': user_project[0],
						'msg': $('textarea#msg_input').val(),
					};

					// process the form
					$.ajax({
						type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
						url: "<?php echo base_url();?>" + "Projet/SendCandidature", // the url where we want to POST
						data: formData, // our data object
						dataType: 'json', // what type of data do we expect back from the server
						encode: true
					})
					// using the done promise callback
						.done(function (data) {

							// log data to the console so we can see
							console.log(data);

							// here we will handle errors and validation messages
						});

					// stop the form from submitting the normal way and refreshing the page
					event.preventDefault();
				}
			}
		);

	});

	$('#launch-projet-modal, #cloturer-projet').on('click', function () {
		location.reload();
	});

</script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
	$(document).ready(function () {
	/*
      // process the form
      $('form').submit(function(event) {

          // get the form data
          // there are many ways to get this data using jQuery (you can use the class or id also)
          var formData = {
              'name'              : $('input[name=name]').val(),
              'email'             : $('input[name=email]').val(),
              'superheroAlias'    : $('input[name=superheroAlias]').val()
          };

          // process the form
          $.ajax({
              type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
              url         : 'process.php', // the url where we want to POST
              data        : formData, // our data object
              dataType    : 'json', // what type of data do we expect back from the server
                          encode          : true
          })
              // using the done promise callback
              .done(function(data) {

                  // log data to the console so we can see
                  console.log(data);

                  // here we will handle errors and validation messages
              });

          // stop the form from submitting the normal way and refreshing the page
          event.preventDefault();
      });

    });
    */
</script>
<script>
	// Render the PayPal button
	paypal.Button.render({
		// Set your environment
		env: 'sandbox', // sandbox | production

		// Specify the style of the button

		style: {
			layout: 'vertical',  // horizontal | vertical
			size: 'medium',    // medium | large | responsive
			shape: 'rect',      // pill | rect
			color: 'gold'       // gold | blue | silver | white | black
		},
		/*
        style: {
         size: 'small',
         color: 'gold',
         shape: 'pill',
         label: 'checkout',
         tagline: 'true'
        },*/

		// Specify allowed and disallowed funding sources
		//
		// Options:
		// - paypal.FUNDING.CARD
		// - paypal.FUNDING.CREDIT
		// - paypal.FUNDING.ELV
		funding: {
			allowed: [
				paypal.FUNDING.CARD,
				paypal.FUNDING.CREDIT
			],
			disallowed: []
		},

		// Enable Pay Now checkout flow (optional)
		commit: true,

		// PayPal Client IDs - replace with your own
		// Create a PayPal app: https://developer.paypal.com/developer/applications/create
		client: {
			sandbox: 'AdB7xxsQOwR8eWt6DRclDP5RuK3wNqrYifJ7ZesLj0bhUyJJBZZ0jSJuqvEIVF89462fveisVnu_5Tb7',
			production: ''
		},
		/*
        payment: function (data, actions) {
          return actions.payment.create({
              transactions: [{
                  amount: {
                    total: '33.00',
                    currency: 'USD',
                    details: {
                     subtotal: '33.00',
                     tax: '0.05',
                     shipping: '0.00',
                     handling_fee: '3.00',
                     shipping_discount: '0.00',
                     insurance: '1.00'
                    }
                  },
                  description: 'Payment pour le jalon 1',
                  custom: '12345',
                  payment_options: {
                   allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
                  },
                  soft_description: 'ECHI5786786',
                  item_list:{
                   items: [
                   {
                     name: 'hat',
                     description: 'Paiement première échéance',
                     quantity: '1',
                     price: '33.00',
                     tax: '0.05',
                     sku: 'jalon_01',
                     currency: 'USD'
                   }],
                   shipping_address: {
                   recipient_name: 'Yoann DE STEFANI',
                   line1: '1Th Etage',
                   line2: 'Bat E',
                   city: 'Toulouse',
                   country_code: 'FR',
                   postal_code: '95131',
                   phone: '011862212345678',
                   state: 'CA'
                 }
                  }
                }],
                note_to_payer: 'Contact LoaFreelance pour toutes question sur votre paiement'
          });
        },
        */

		// Set up a payment
		payment: function (data, actions) {
			return actions.payment.create({
				transactions: [{
					amount: {
						total: '30.11',
						currency: 'USD',
						details: {
							subtotal: '30.00',
							tax: '0.07',
							shipping: '0.03',
							handling_fee: '1.00',
							shipping_discount: '-1.00',
							insurance: '0.01'
						}
					},
					description: '<?= $description ?>',
					custom: '90048630024435',
					//invoice_number: '12345', Insert a unique invoice number
					payment_options: {
						allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
					},
					soft_descriptor: 'ECHI5786786'

				}],
				note_to_payer: 'Projet : Création web app\nPaiement livrable : 1 \nPour toutes questions contactez LoaFreelance.com'
			});
		},
		// Execute the payment
		onAuthorize: function (data, actions) {
			return actions.payment.execute().then(function () {
				// Show a confirmation message to the buyer
				window.alert('Thank you for your purchase!');
			});
		}
	}, '#paypal-button-container');
</script>
