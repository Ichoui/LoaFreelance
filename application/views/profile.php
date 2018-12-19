<?php $this->load->view('shared/header'); ?>
<?php $this->load->view('shared/menubar'); ?>

<main class="page landing-page">
    <div class="container profile">
        <img style="border: 1px solid black;">
        <div class="identity">
            <p>Prénom : {prenom}</p>
            <p>Nom : {nom}</p>
        </div>
        <div class="identity">
            <p>Tarif horaire : {tarif}</p>
        </div>
    </div>
</main>

<?php $this->load->view('shared/footer');?>
