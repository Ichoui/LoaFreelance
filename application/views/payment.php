<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menubar'); ?>

<main class="page payment">
    <section class="clean-block payment-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Paiement</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <form>
                <div class="products">
                    <h3 class="title">Checkout</h3>
                    <div class="item"><span class="price">$200</span>
                        <p class="item-name">Paiement 1</p>
                        <p class="item-description">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="item"><span class="price">$120</span>
                        <p class="item-name">Paiement 2</p>
                        <p class="item-description">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="total"><span>Total</span><span class="price">$320</span></div>
                </div>
                <div class="card-details">
                    <h3 class="title">Mode de règlement</h3>
                    <div class="form-row">
                        <div class="col-sm-7">
                            <div class="form-group"><label for="card-holder">TITULAIRE</label><input class="form-control" type="text" placeholder="Titulaire de la carte"></div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group"><label>date D'EXPIRATION</label>
                                <div class="input-group expiration-date"><input class="form-control" type="text" placeholder="MM"><input class="form-control" type="text" placeholder="YY">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group"><label for="card-number">NUMERO</label><input class="form-control" type="text" placeholder="Numéro de carte" id="card-number"></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label for="cvc">Code de sécurité</label><input class="form-control" type="text" placeholder="CVC" id="cvc"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Payer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<?php $this->load->view('shared/footer');?>
