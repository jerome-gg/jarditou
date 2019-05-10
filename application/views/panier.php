<a href="<?php echo site_url('Produits/boutique') ?>">Cliquez ici pour continuer vos achats</a>

<?php 
 var_dump($_SESSION['user_panier']);
var_dump($panier);

?>

<table class="table-striped">
  <thead class="table table-bordered ">
      <tr>
        <td>Photos</td>
        <td>Libelle</td>
        <td>Quantité</td>
        <td>Prix</td>
      </tr>
  </thead>  
  <tbody> 
      <?php 
      $i=0; 
      $total = 0;
      foreach ($panier as $key=>$value){  ?>
          <tr> 
            <td><img  class='photo rounded mx-auto d-block' src="<?php echo base_url("assets/images/{$value['pro_photo']}") ?>"></td> 
            <td><?php echo $value['pro_name']; ?></td>
            <td> 
              <input type="text"  class="form-control" name="nombre" id="<?php echo $value['pro_id'] ?>" value="<?php echo $_SESSION['user_panier'][$key]['nombre']; ?>" size="1" readonly>
              <i id="moins" name="moins<?php echo $value['pro_id'] ?>" class="fas fa-minus moins" value="<?php echo $value['pro_id'] ?>"></i>
              <i id="plus" name="plus<?php echo $value['pro_id'] ?>" class="fas fa-plus plus" value="<?php echo $value['pro_id'] ?>"></i>
             </td>
            <td><input type="text" class="form-control" name="prix" id="somme_produit" value="<?php echo $prix = $value['pro_prix'] * $_SESSION['user_panier'][$key]['nombre'];?>"  size="4" readonly></td>
            <td></td>
            <?php $total += $prix ; ?>
          </tr>
      <?php  $i++; } ?> 
  </tbody>        
</table>
<div>
    <label for="total">Total :</label>
    <input type="text" class="form-control" name="total" id="total" value="<?php echo $total  ?>" size="4" readonly>
</div>
