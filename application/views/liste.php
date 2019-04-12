
        <h1>Liste de produits</h1>
        <div class="container">
            <table class="table-striped">
                <thead class="table table-bordered ">
                    <tr>
                        <td>Photos</td>
                        <td>Id</td>
                        <td>Ref</td>
                        <td>Libelle</td>
                        <td>Prix</td>
                        <td>Stock</td>
                        <td>Couleur</td>
                        <td>Date d'ajout</td>
                        <td>Date de modification</td>
                        <td>Produit bloqué</td>
                    </tr>
                </thead>  
                <tbody> 
                    <?php foreach ($liste_produit as $row){ 
                        if($row->pro_bloque==1){
                            $ok = 'oui';

                        }else{
                            $ok = 'non';
                        }?>
                        <tr>
                            <td><img class='photo' src="<?php echo base_url('assets/images/').$row->pro_id.'.'.$row->pro_photo ?>"></td>
                            <td><?php echo $row->pro_id; ?></td>
                            <td><a href="<?php echo site_url('Produits/detail?id='). $row->pro_id ?>"><?php echo $row->pro_ref; ?></a> </td>
                            <td><?php echo $row->pro_libelle; ?></td>
                            <td><?php echo $row->pro_prix; ?></td>
                            <td><?php echo $row->pro_stock; ?></td>
                            <td><?php echo $row->pro_couleur; ?></td>
                            <td><?php echo $row->pro_d_ajout; ?></td>
                            <td><?php echo $row->pro_d_modif; ?></td>
                            <td><?php echo $ok; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>        
            </table>           
        </div>
