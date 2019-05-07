<a href="<?php echo site_url('Produits/boutique') ?>">Cliquez ici pour continuer vos achats</a>

<?php 

 

var_dump($panier);?>


<table class="table-striped">
  <thead class="table table-bordered ">
      <tr>
        <td>Photos</td>
        <td>Libelle</td>
        <td>Quantité</td>
        <td>Prix</td>
        <td>total</td>
      </tr>
  </thead>  
  <tbody> 
  
      <?php 
      $i = 0;
      $total = 0;
      while ($i < count($panier)){  ?>
          
          <tr> 
            <td><img class='photo rounded mx-auto d-block' src="<?php echo $panier[$i]['pro_id'].base_url("assets/images/")?>"></td>
            <td><?php echo $panier[$i]['pro_libelle'] ?></td>
            <td><?php echo $panier[$i]['nombre'] ?></td>
            <td><?php echo $panier[$i]['pro_prix']; ?></td>
          </tr>

      <?php $i++; } ?>
  </tbody>        
</table>

