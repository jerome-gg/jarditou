<!DOCTYPE html>
<html lang="fr">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
    <link href = "<?php  base_url("/assets/treeview/src/css/bootstrap-treeview.css")?>"  rel = "stylesheet ">
    

</head>
    <body>
        <header>
        <?php var_dump($_SESSION); ?>
            <div class="container-fluid ">
                <div class="row">
                    <div>
                        <img id="logo" src="<?php echo base_url("assets/images/jarditou_logo.jpg");?>" alt="logo jarditou">
                    </div>
                </div>
                <div class="row">
                    <div class="liens">
                        <div class="row ">
                            <a class="ml-5" href="<?php echo site_url('Produits/accueil'); ?>">Accueil</a>
                            <?php if($this->session->user_droit){ ?>
                                <a class="ml-5" href="<?php echo site_url('Users/deconnexion');?>">Déconnexion</a>
                            <?php } 
                            
                                if($this->session->user_droit == 'a'){?>
                                <a class="ml-5" href="<?php echo site_url('Produits/liste'); ?>">Liste des articles</a>
                                <a class="ml-5" href="<?php echo site_url('Produits/ajout'); ?>">Ajouter un article</a>
                             
                            <?php } ?>  
                        </div>
                    </div>
                </div>
            </div>
        </header>