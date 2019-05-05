
    <div class="row d-flex justify-content-around nav-boutique">
        <button  type="button" class="btn btn-outline-dark" id="all">Voir tout les produits</button>
        <button  type="button" class="btn btn-outline-dark" value="1" id="outillage">Outillage</button>
        <button  type="button" class="btn btn-outline-dark" value="4" id="plants">Plants et semis</button>
        <button  type="button" class="btn btn-outline-dark" value="5" id="arbres">Arbres arbuste</button>
        <button  type="button" class="btn btn-outline-dark" value="6" id="accessoires">Pot et accesoires</button>
        <button  type="button" class="btn btn-outline-dark" value="7" id="mobilier">Mobilier de jardin</button>
        <button  type="button" class="btn btn-outline-dark" value="8" id="materiaux">Matériaux</button>
    </div>
    <div class="container" id='boutique'>
      <div class="row" id="boutique2">
        <?php foreach($liste_produit as $row){ ?>
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

