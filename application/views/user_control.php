
<div class="container">

<div class="accordion" id="accordionExample">
    <div class="col-lg-12">
        <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link text-decoration-none title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Droits utilisateurs
            </button>
        </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 effet">
                        
                        <table class="table table-bordered mt-2">
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
            </div>
        </div>
  </div>
    <div class="col-lg-12">
        <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed text-decoration-none title" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Liste des 20 dernières commandes
            </button>
        </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 effet">
                        <table class="table-striped table-bordered offset-1 col-lg-10 mt-2 mb-2">
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
                                    <td ><?php echo $total_cmd[0]->total_ttc ?></td>
                                </tr>
                            </tfoot>       
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
    <div class="card-header" id="headingThree">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed text-decoration-none title" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Article proche du stock 0
            </button>
        </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 effet">
                        <table class="table-striped table-bordered offset-1 col-lg-10 mt-2 mb-2">
                            <thead class="table table-bordered ">
                                <tr class="table-active">
                                    <td class="titre"><h4>Id</h4></td>
                                    <td class="titre"><h4>Libellé</h4></td>
                                    <td class="titre"><h4>Stock</h4></td>
                                </tr>
                            </thead>  
                            <tbody> 
                                <?php foreach ($stock as $row) { ?>
                                <tr>
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
        </div>
    </div>
</div>