<!DOCTYPE html>
<html lang="fr">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    

</head>
    <body>
  
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
                <!-- <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo site_url('Produits/accueil');?>">Accueil <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo site_url('Produits/boutique');?>">Boutique <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo site_url("Produits/panier"); ?>">Panier <span class="sr-only"></span></a>
                            </li>
                            <?php if(!$this->session->user_name == ''){ ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('Produits/all_commandes_by_id/');?>">Mes commandes <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('Users/deconnexion');?>">Déconnexion <span class="sr-only"></span></a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('Users/connexion');?>">Se connecter <span class="sr-only"></span></a>
                                </li>
                            <?php } ?>
                            <?php if($this->session->user_droit == 'admin'){?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Administration
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo site_url('Users/controle'); ?>">Panneau de controle</a>
                                        <a class="dropdown-item" href="<?php echo site_url('Produits/liste'); ?>">Liste des articles</a>
                                        <a class="dropdown-item" href="<?php echo site_url('Produits/ajout'); ?>">Ajouter un article</a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            <header>
                <!-- <div class="container ">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a class="flex-sm-fill text-sm-center nav-link " href="<?php// echo site_url('Produits/accueil');?>">Accueil</a>
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php //echo site_url('Produits/boutique');?>">Boutique</a>
                        <?php// if(!$this->session->user_name == ''){ ?>
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php //echo site_url('Produits/all_commandes_by_id/');?>">Mes commandes</a>
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php //echo site_url('Users/deconnexion');?>">Déconnexion</a>
                        <?php// } else { ?>
                            <a class="flex-sm-fill text-sm-center nav-link" href="<?php// echo site_url('Users/connexion');?>">Se connecter</a>
                        <?php //} ?>         
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php// echo site_url("Produits/panier"); ?>">Panier</a>
                    </nav>
                    <?php// if($this->session->user_droit == 'admin'){?>
                    <nav class="nav nav-pills flex-column flex-sm-row admin">
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php// echo site_url('Users/controle'); ?>">Panneau de controle</a>
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php// echo site_url('Produits/liste'); ?>">Liste des articles</a>
                        <a class="flex-sm-fill text-sm-center nav-link" href="<?php// echo site_url('Produits/ajout'); ?>">Ajouter un article</a>
                    </nav>
                    <?php// } ?>
                </div> -->
            </header>
        </div>


        <!-- <div class="container-fluid">
            <header>
                <div class="container ">
                    <div class="row tete">
                        <div class="col-3">
                            <img id="logo" src="<?php //echo base_url("assets/images/jarditou_logo.jpg");?>" alt="logo jarditou">
                        </div>
                        <div class="liens col-3">
                            <a class="ml-5" href="<?php// echo site_url('Produits/accueil');?>">Accueil</a>
                            <a class="ml-5" href="<?php// echo site_url('Produits/boutique');?>">Boutique</a>
                            <?php// if(!$this->session->user_name == ''){ ?>
                                <a class="ml-5" href="<?php// echo site_url('Produits/all_commandes_by_id/');?>">Mes commandes</a>
                                <a class="ml-5" href="<?php// echo site_url('Users/deconnexion');?>">Déconnexion</a>
                                <?php //} else { ?>
                                    <a class="ml-5" href="<?php// echo site_url('Users/connexion');?>">Se connecter</a>
                                <?php //} ?>         
                        </div>
                        <a class="col-2 Panier" href="<?php// echo site_url("Produits/panier"); ?>"><img src="<?php// echo base_url("assets/images/panier.png");?>" id="panier" alt="panier"> </a>
                        <?php //if($this->session->user_droit == 'admin'){?>
                            <div class="admin col-4">
                                <p class="ml-5">Accès Administrateur</p>
                                <a class="ml-5" href="<?php// echo site_url('Users/controle'); ?>">Panneau de controle</a><br>
                                <a class="ml-5" href="<?php// echo site_url('Produits/liste'); ?>">Liste des articles</a><br>
                                <a class="ml-5" href="<?php// echo site_url('Produits/ajout'); ?>">Ajouter un article</a>
                            </div>
                        <?php//} ?>
                    </div>
                </div>
            </header>
        </div> -->
        
