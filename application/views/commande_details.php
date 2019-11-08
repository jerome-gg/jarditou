<div class="container">
    <div class="row col-lg-10">
        <!-- <table class="table-striped ">
            <thead class="table table-bordered ">
                <tr class="table-active">
                    <td class="titre"><h4>Photos</h4></td>
                    <td class="titre"><h4>Libelle</h4></td>
                    <td class="titre"><h4>Quantité</h4></td>
                </tr>
            </thead>  
            <tbody> 
                <?php //foreach ($details as $row){  ?>
                    <tr class="table-light"> 
                        <td><img  class='photo rounded mx-auto d-block' src="<?php// echo base_url("assets/images/".$row->pro_id.".".$row->pro_photo) ?>"></td> 
                        <td><?php// echo $row->pro_libelle; ?></td>                      
                        <td><?php// echo $row->lig_quantite; ?></td>
                    </tr>
                <?php//  } ?> 
            </tbody>        
        </table> -->
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>Photos</th>
                <th>Libelle</th>
                <th>Quantité</th>
                </tr>
            </thead>
            <?php foreach ($details as $row){  ?>
                <tbody>
                    <tr>
                        <td><img  class='photo rounded mx-auto d-block' src="<?php echo base_url("assets/images/".$row->pro_id.".".$row->pro_photo) ?>"></td> 
                        <td><?php echo $row->pro_libelle; ?></td>                      
                        <td><?php echo $row->lig_quantite; ?></td>
                    </tr>
                </tbody>
            <?php  } ?> 
        </table>
    </div>
</div>
