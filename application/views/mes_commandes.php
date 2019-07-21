<div class="container">
    <div class="row">
        <table class="table-striped offset-1 col-lg-10">
            <thead class="table table-bordered ">
                <tr class="table-active">
                    <td class="titre"><h4>N° commande</h4></td>
                    <td class="titre"><h4>Date de la commande</h4></td>
                    <td class="titre"><h4>Total TTC</h4></td>
                    <td class="titre"><h4>Status</h4></td>
                    <td class="titre"><h4>Détails</h4></td>
                </tr>
            </thead>  
            <tbody> 
                <?php foreach ($commandes as $row) { ?>
                <tr>
                    <td><?php echo $row->com_id ?></td>
                    <td><?php echo $row->com_date ?></td>
                    <td><?php echo $row->com_total_ttc ?></td>
                    <td class="<?php if($row->com_status == 'livrée'){ echo 'table-success';}else{ echo 'table-info';} ?>"><?php echo $row->com_status ?></td>
                    <td ><a href="<?php echo site_url("produits/find_commande/".$row->com_id) ?>">Voir</a></td>
                </tr>
                <?php } ?>
            </tbody>        
        </table>
    </div>
</div>