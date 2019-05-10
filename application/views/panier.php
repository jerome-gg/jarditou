<a href="<?php echo site_url('Produits/boutique') ?>">Cliquez ici pour continuer vos achats</a>

<?php 
 var_dump($_SESSION['user_panier']);
/*var_dump($panier); */
?>

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
      $i=0; 
      $total = 0;
      foreach ($panier as $key=>$value){  ?>
          <tr> 
            <td><img  class='photo rounded mx-auto d-block' src="<?php echo base_url("assets/images/{$value->pro_id}.{$value->pro_photo}") ?>"></td> 
            <td><?php echo $value->pro_libelle; ?></td>
            <td> 
              <div>
                <i id="moins" name="moins<?php echo $value->pro_id ?>" class="fas fa-minus moins" value="<?php echo $value->pro_id ?>"></i>
                <input type="text"  name="nombre" id="<?php echo $value->pro_id ?>" value="<?php echo $_SESSION['user_panier'][$key]['nombre']; ?>" size="1">
                <i id="plus" name="plus<?php echo $value->pro_id ?>" class="fas fa-plus plus" value="<?php echo $value->pro_id ?>"></i>
              </div>
             </td>
            <td><?php echo $prix = $_SESSION['user_panier'][$key]['pro_prix'] * $_SESSION['user_panier'][$key]['nombre']  ; ?></td>
            <td><?php echo $value->pro_prix; ?></td>
            <?php $total += $prix ; ?>
          </tr>
         
      <?php  $i++; } ?> 
  </tbody>        
</table>
<div>
    <p>total</p>
    <p><?php echo $total  ?></p>
</div>
