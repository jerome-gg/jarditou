
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

        <div class="card col-4 view cat<?php echo $row->cat_id ?>" style="width: 18rem;" id=card>
          <div class="boxPhoto mt-2">
            <img src="<?php echo base_url("assets/images/". $row->pro_id .".". $row->pro_photo) ?>" class="card-img-top photo2 rounded mx-auto d-block ">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row->pro_libelle ?></h5> 
            <div class="cardText">
              <p class="card-text description"><?php echo $row->pro_description ?></p>
            </div>
            <p class="card-text prix"><?php echo $row->pro_prix_ht ?> € </p>
            <?php if($row->pro_stock <= 0){  ?>
              <p> Ce produit n'est plus disponile pour le moment </p>
              <?php }else{ ?> 
                <form method="post" action="http://localhost/ci/index.php/Produits/add_panier">
                  <label for="nombre">Nombre d'articles:</label>
                  <input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="<?php echo $row->pro_stock ?>" value="1">
                  <input type="hidden" id="pro_prix" name="pro_prix" value="<?php echo $row->pro_prix_ht ?>">
                  <input type="hidden" id="" name="pro_id" value="<?php echo $row->pro_id ?>">
                  <button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>
                </form> 
            <?php } ?>
          </div>


        <!-- <div class="card col-4" style="card" id="card">
          <div class="hauteur_photo mt-2">
            <img src="<?php // echo base_url("assets/images/{$row->pro_id}.{$row->pro_photo}") ?>" class="card-img-top photo rounded mx-auto d-block" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php //echo $row->pro_libelle ?></h5>
            <div class="card-text ">
              <p class=""><?php //echo $row->pro_description ?></p>
              <p class=""><?php //echo $row->pro_prix ?> €</p>
            </div>
            <div class="mb-2 pl-1">
              <form method="post" action="<?php// echo site_url('Produits/add_panier') ?>" >
                <label for="nombre" class="ml-3">Nombre d'articles:</label>
                <input type="number" id="nombre" class="rounded boutique-input" name="nombre" min="1" max="10" value="1" class="" size="2">
                <input type="hidden" id="pro_prix" name="pro_prix" value="<?php //echo $row->pro_prix ?> ">
                <input type="hidden" id="pro_id" name="pro_id" value="<?php //echo $row->pro_id ?>">
                <button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>
              </form>
            </div>          
          </div>-->
        </div> 
      <?php } ?>
    </div>
</div>
            



    


    
   
