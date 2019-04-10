<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Liste des produits</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/liste.css");;?>">
</head>
    <body>
        <h1>Liste de produits</h1>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>ref</td>
                    <td>libelle</td>
                    <td>prix</td>
                    <td>stock</td>
                    <td>couleur</td>
                    <td>date d'ajout</td>
                    <td>date de modification</td>
                    <td>produit bloqué</td>
                </tr>
            </thead>  
            <tbody>  
                <?php foreach ($liste_produit as $row){ ?>
                    <td><?php echo $row->pro_id; ?></td>
                    <td><?php echo $row->pro_ref; ?></td>
                    <td><?php echo $row->pro_libelle; ?></td>
                    <td><?php echo $row->pro_description; ?></td>
                    <td><?php echo $row->pro_prix; ?></td>
                    <td><?php echo $row->pro_stock; ?></td>
                    <td><?php echo $row->pro_couleur; ?></td>
                    <td><?php echo $row->pro_photo; ?></td>
                    <td><?php echo $row->pro_d_ajout; ?></td>
                    <td><?php echo $row->pro_d_modif; ?></td>
                    <td><?php echo $row->pro_bloque; ?></td>
            </tbody>        
        </table>
        <?php } ?>
    </body>
</html>