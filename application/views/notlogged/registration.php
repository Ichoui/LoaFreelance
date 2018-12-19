<?php $this->load->view('shared/header');?>
<?php $this->load->view('shared/menubar_notlogged', $place);?>

<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Register</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
            <form>
                <div class="form-group"><input class="form-control item" type="text" placeholder="Name" id="name"></div>
                <div class="form-group"><input class="form-control item" type="password" placeholder="Email" id="password"></div>
                <div class="form-group"><input class="form-control item" type="email" placeholder="Password" id="email"></div>
                <button class="btn btn-primary btn-block" type="submit" style="background-color: #49c5b6;">Sign Up</button>
            </form>
        </div>
    </section>
</main>

<?php $this->load->view('shared/footer');?>
