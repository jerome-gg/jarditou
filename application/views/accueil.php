<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Bienvenue sur notre site.</h1>        
        </div>
        <nav class="col-12">
            <a class="accueil" href="<?php echo site_url('Produits/boutique'); ?>">Visiter la boutique</a><br>
            <!-- <a class="accueil" href="<?php echo site_url('Users/connexion'); ?>">Se connecter</a><br> -->
            <?php if($this->session->user_name == ''){ ?>
                <a class="accueil" href="<?php echo site_url('Users/inscription'); ?>">Crée son compte</a>
            <?php } ?>
        </nav>
        <section class=" col jardin">
            
        </section>
    </div>
</div>

