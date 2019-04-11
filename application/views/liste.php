<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/liste.css");?>">
</head>
    <body>
        <header>
            <a href="<?php echo site_url('Produits/ajout') ?>">Ajouter un article</a>
            <!-- <a class="nav-link" href="<?php //echo site_url('Produits/detail?id=').$row->pro_id; ?>" >Modifier</a> -->
        </header>
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
                    <?php foreach ($liste_produit as $row){ ?>
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
                            <td><?php echo $row->pro_bloque; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>        
            </table>
            
            
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>