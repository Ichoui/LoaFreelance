<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menu'); ?>

<main class="page projet">
	<section class="container">
		<h1 class="main-title"><?php echo $title; ?></h1>
		<div class="about-projet">
			<div class="description"><span>Description :</span><?php echo $description; ?>
			</div>
			<div class="proprietaire"><span>Porteur du projet : </span><?php echo $last_name.' '.$first_name; ?></div>
			<div class="free"><span>Freelanceur(s) inscrits :</span>
				<ul>
					<li>Free A</li>
					<li>Free B</li>
				</ul>
			</div>
			<!-- Accessible si porteur du projet ou freelanceur inscrit-->
			<div>Jalons :</div>
			<ul class="jalons-list">
				<li class="jalon payed">04/01/2019
					<div id="paypal-button-container"></div>
				</li>
				<li class="jalon payed">04/02/2019
				<button class="btn btn-outline-primary">Payer</button>
			</li>
				<li class="jalon">04/03/2019
				<button class="btn btn-outline-primary">Payer</button>
			</li>
				<li class="jalon">04/04/2019
				<button class="btn btn-outline-primary">Payer</button>
			</li>
			</ul>

			<!-- Accessible pour le freelanceur non inscrit-->
			<div class="proposition-devis">
				<form action="" type="POST">
					<textarea placeholder="Postulez pour ce projet en écrivant un texte au porteur du projet..."></textarea>
					<button class="btn btn-outline-primary">Envoyer la proposition</button>
				</form>
			</div>
			<hr>
			<!-- Accessible pour tous-->
			<div class="devis-list">
				<div class="devis">
					<div class="user">
						<div class="name">PGM Freelancer</div>
						<div class="tarif">15 € / H</div>
						<div class="avis">Avis : {5} <img src="<?= base_url('/assets/img/star.svg') ?>"></div>
						<!-- Seulement pour un porteur de projet-->
						<a href="<?= base_url('messages') ?>" class="btn btn-outline-primary">Accepter</a>
					</div>
					<div
						class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex impedit ipsum perspiciatis! Delectus ipsam labore minima nemo, quae quis voluptatem.</div>
				</div>
			</div>

		</div>
	</section>
</main>
<?php $this->load->view('shared/chat-window'); ?>
<?php $this->load->view('shared/footer'); ?>

<script src="<?= base_url() ?>assets/js/mdvg.js"></script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button

style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'medium',    // medium | large | responsive
  shape:  'rect',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
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
  production: '<insert production client id>'
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
payment: function(data, actions) {
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
      description: 'The payment transaction description.',
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
onAuthorize: function(data, actions)
{
  return actions.payment.execute().then(function()
  {
    // Show a confirmation message to the buyer
    window.alert('Thank you for your purchase!');
  });
}
}, '#paypal-button-container');
</script>

<!--visionner un projet-->

