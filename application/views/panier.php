<a href="<?php echo site_url('Produits/boutique') ?>">Cliquez ici pour continuer vos achats</a>


      
         
    <div class="container" id='boutique'>
      <div class="row" id="boutique2">
        <?php foreach ($_SESSION['user_panier'] as $row) { ?>
          <div class="card col-4" style="width: 18rem;" id=card>
            <img src="<?php echo base_url("assets/images/{$row->pro_id}.{$row->pro_photo}") ?>" class="card-img-top photo rounded mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row->pro_libelle ?></h5>
              <p class="card-text"><?php echo $row->pro_description ?></p>
              <p class="card-text"><?php echo $row->pro_prix ?></p>
              <a href="<?php echo site_url("Produits/panier/{$row->pro_id}") ?>" class="btn btn-primary">Ajouter au panier</a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>


  