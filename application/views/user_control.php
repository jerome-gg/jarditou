
<div class="container">
    <div class="row">
        <div class="col-lg-12 effet">
            <h1>Droits utilisateurs</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Dernière connection</th>
                        <th scope="col">Droits</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    <?php foreach ($utilisateur as $row) {?>
                        <tr>
                            <td><?php echo $row->user_nom ?></td>
                            <td><?php echo $row->user_prenom ?></td>
                            <td><?php echo $row->user_mail ?></td>
                            <td><?php echo $row->user_date_der_co ?></td>
                            <td><?php echo $row->user_droit?></td>
                            <td>
                                <div>
                                    <input data-id="<?php echo $row->user_id?>" class="droits" type="radio" id="utilisateur.<?php echo $i?>" name="droit<?php echo $i ?>" value="admin" <?php if($row->user_droit == "admin"){echo 'checked';} ?>>
                                    <label for="droit">Administrateur</label>
                                </div>
                                <div>
                                    <input  data-id="<?php echo $row->user_id?>" class="droits" type="radio" id="utilisateur.<?php echo $i ?>" name="droit<?php echo $i ?>" value="utilisateur" <?php if($row->user_droit != "admin"){echo 'checked';} ?>>
                                    <label for="droit">Utilisateur</label>
                                </div>
                            </td>
                            <td><a href="<?php echo site_url('/users/delete_user/'.$row->user_id); ?>" >Supprimer</a></td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 effet">
            <h1>Liste des 20 dernières commandes</h1>
            <table class="table-striped table-bordered offset-1 col-lg-10">
                <thead class="table table-bordered ">
                    <tr class="table-active">
                        <td class="titre"><h4>N° commande</h4></td>
                        <td class="titre"><h4>Date de la commande</h4></td>
                        <td class="titre"><h4>Status</h4></td>
                        <td class="titre"><h4>Détails</h4></td>
                        <td class="titre"><h4>Total TTC</h4></td>
                    </tr>
                </thead>  
                <tbody> 
                    <?php  foreach ($commandes as $row) { ?>
                    <tr>
                        <td><?php echo $row->com_id ?></td>
                        <td><?php echo $row->com_date ?></td>
                        <td class="<?php if($row->com_status == 'livrée'){ echo 'table-success';}else{ echo 'table-info';} ?>"><?php echo $row->com_status ?></td>
                        <td ><a href="<?php echo site_url("produits/find_commande/".$row->com_id) ?>">Voir</a></td>
                        <td><?php echo $row->com_total_ttc ?></td>
                    </tr>
                    <?php } ?>
                </tbody> 
                <tfoot>
                    <tr class="table-active">   
                        <td colspan="4"> Total des commandes</td>
                        <td ><?php echo $total_cmd[0]->total_ttc?></td>
                    </tr>
                </tfoot>       
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 effet">
            <h1>Article proche du stock 0</h1>
            <table class="table-striped table-bordered offset-1 col-lg-10">
                <thead class="table table-bordered ">
                    <tr class="table-active">
                        <td class="titre"><h4>Photo</h4></td>
                        <td class="titre"><h4>Id</h4></td>
                        <td class="titre"><h4>Libellé</h4></td>
                        <td class="titre"><h4>Stock</h4></td>
                    </tr>
                </thead>  
                <tbody> 
                    <?php foreach ($stock as $row) { ?>
                    <tr>
                        <td><img class="" src="<?php echo base_url("ssets/images/$row->pro_id.$row->pro_photo") ?>" ></td>
                        <td><?php echo $row->pro_id ?></td>
                        <td><?php echo $row->pro_libelle ?></td>
                        <td class="<?php if($row->pro_stock == 0){ echo 'table-danger';}else{ echo 'table-info';} ?>"><?php echo $row->pro_stock ?></td>
                    </tr>
                    <?php } ?>
                </tbody>        
            </table>
        </div>
    </div>
</div>