<div class="container">
    <div class="row">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>N° commande</th>
                <th>Date de la commande</th>
                <th>Total TTC</th>
                <th>Status</th>
                <th>Détails</th>
                </tr>
            </thead>
            <?php foreach ($commandes as $row){  ?>
                <tbody>
                    <tr>
                        <td><?php echo $row->com_id ?></td>
                        <td><?php echo $row->com_date ?></td>
                        <td><?php echo $row->com_total_ttc ?></td>
                        <td class="<?php if($row->com_status == 'livrée'){ echo 'table-success';}else{ echo 'table-info';} ?>"><?php echo $row->com_status ?></td>
                        <td ><a href="<?php echo site_url("produits/find_commande/".$row->com_id) ?>">Voir</a></td>
                    </tr>
                </tbody>
            <?php  } ?> 
        </table>
    </div>
</div>