
<div class="row d-flex justify-content-around nav-boutique">
    <button  type="button" class="btn btn-outline-dark" id="all">Voir tout les produits</button>
    <button  type="button" class="btn btn-outline-dark" value="1" id="outillage">Outillage</button>
    <button  type="button" class="btn btn-outline-dark" value="4" id="plants">Plants et semis</button>
    <button  type="button" class="btn btn-outline-dark" value="5" id="arbres">Arbres arbuste</button>
    <button  type="button" class="btn btn-outline-dark" value="6" id="accessoires">Pot et accesoires</button>
    <button  type="button" class="btn btn-outline-dark" value="7" id="mobilier">Mobilier de jardin</button>
    <button  type="button" class="btn btn-outline-dark" value="8" id="materiaux">Matériaux</button>
</div>
    

<!-- <?php //var_dump($liste_produit) ?> -->
<div class="container" id='boutique'>
  <div class="row boutique2" id="boutique2">
      <?php foreach($liste_produit as $row){ ?>

        <!-- <div class="card col-4 view cat<?php// echo $row->cat_id ?>"  id=card>
          <div class="boxPhoto mt-2">
            <img src="<?php// echo base_url("assets/images/". $row->pro_id .".". $row->pro_photo) ?>" class="card-img-top photo2 rounded mx-auto d-block " id=card>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php// echo $row->pro_libelle ?></h5> 
            <div class="cardText">
              <p class="card-text description"><?php// echo $row->pro_description ?></p>
            </div>
            <p class="card-text prix"><?php// echo $row->pro_prix_ht ?> € </p>
            <?php //if($row->pro_stock <= 0){  ?>
              <p> Ce produit n'est plus disponile pour le moment </p>
              <?php// }else{ ?> 
                <form method="post" action="http://localhost/ci/index.php/Produits/add_panier">
                  <label for="nombre">Nombre d'articles:</label>
                  <input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="<?php// echo $row->pro_stock ?>" value="1">
                  <input type="hidden" id="pro_prix" name="pro_prix" value="<?php// echo $row->pro_prix_ht ?>">
                  <input type="hidden" id="" name="pro_id" value="<?php// echo $row->pro_id ?>">
                  <button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>
                </form> 
            <?php// } ?>
                </div>
        </div> --> 
        
            <div class="col-md-6 fiche cat<?php echo $row->cat_id ?>" >
              <div class="card_boutique row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >
                <div class="col-6 p-4 d-flex flex-column position-static border-right">
                  <h3 class="mb-0"><?php echo $row->pro_libelle ?></h3>
                  <p class="card-text mb-auto"><?php echo $row->pro_description ?></p>
                  <?php if($row->pro_stock <= 0){  ?>
                    <p class="boutique_quantite"> Ce produit n'est plus disponile pour le moment </p>
                  <?php }else{ ?> 
                    <form method="post" action="http://localhost/ci/index.php/Produits/add_panier" class="form_boutique">
                      <label for="nombre" class="boutique_quantite">Nbr d'articles:</label>
                      <input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="<?php echo $row->pro_stock ?>" value="1">
                      <input type="hidden" id="pro_prix" name="pro_prix" value="<?php echo $row->pro_prix_ht ?>">
                      <input type="hidden" id="" name="pro_id" value="<?php echo $row->pro_id ?>">
                      <button type="submit" class="btn btn-primary ajout">+</button>
                    </form> 
                  <?php } ?>
                </div>
                <div class="col-6 d-none d-lg-block">
                  <img src="<?php echo base_url("assets/images/". $row->pro_id .".". $row->pro_photo) ?>" class="card-img-top photo2 rounded mx-auto d-block ">
                </div> 
              </div>
            </div> 
      <?php } ?>
    </div>
</div>
            



    


    
   
