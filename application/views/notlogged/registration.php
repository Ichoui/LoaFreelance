<?php $this->load->view('shared/header');?>
<?php $this->load->view('shared/menubar_notlogged', $place);?>

<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">S'enregistrer</h2>
                <p>Vous êtes sur le point de nous rejoindre. Remplissez le formulaire ci-dessous.</p>
            </div>
            <form>
                <div class="form-group"><input class="form-control item" type="text" placeholder="Nom" id="name"></div>
                <div class="form-group"><input class="form-control item" type="email" placeholder="Email" id="email"></div>
                <div class="form-group"><input class="form-control item" type="password" placeholder="Mot de passe" id="password"></div>
                <button class="btn btn-primary btn-block" type="submit" style="background-color: #49c5b6;">S'enregistrer</button>
            </form>
        </div>
    </section>
</main>

<?php $this->load->view('shared/footer');?>
