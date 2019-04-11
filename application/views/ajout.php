<!DOCTYPE html>
<html>
<head>
    <title>Ajout d'article</title>
</head>
    <body>
        <header>
            <nav class="nav">
                <a class="nav-link active" href="<?php echo site_url('Produits/liste');?>">Acceuil</a>
            </nav>
            <h1>Formulaire ajout d'article</h1>
        </header>
            <div class="container">
                <form action="<?php echo site_url('Produits/ajout');?>" method="post" name="" enctype="multipart/form-data" id="formulaire">
                    <div class="row">                                                           <!-- champs couleur et référence -->
                        <div class="form-group col-5 ">
                            <label for="reference">Référence</label>
                            <input type="text" class="form-control ref" name="pro_ref" id="reference" value="" placeholder="Référence produit">
                        </div>                                                           
                        <div class="form-group col-5 offset-2">                                                    
                            <label for="couleur">Couleur</label>
                            <input type="text" class="form-control" name="pro_couleur" id="couleur" value="">
                        </div>   
                    </div>
                    <div class="row cat-lib">                                                   <!-- champs catégorie et libélé -->
                        <div class="categorie col-5 ">
                            <p class="P">Catégorie</p>
                            <div class="input-group ">
                                <select class="custom-select" name="pro_cat_id" id="categorie" >
                                    <option selected>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="libelle">Libéllé</label>
                            <input type="text" class="form-control" name="pro_libelle" id="libelle" value="" placeholder="Nom du produit">
                        </div>
                    </div>

                    <div class="form-group">                                                    <!-- champ description -->
                        <label for="description">Description</label>
                        <textarea class="form-control" name="pro_description" id="description" rows="3"
                            value=""></textarea>
                    </div>
                    <div class="row">                                                           <!-- champs prix et stock -->
                        <div class="form-group col-5">
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" name="pro_prix" id="prix" value="">
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" name="pro_stock" id="stock" value="">
                        </div>
                    </div>
                    <div class="row">                                                           <!-- champs photo  -->
                        <div class="chieur col-5">
                            <p class="P">Photo</p>
                            <div class="input-group mb-2 ">
                                <div class="custom-file">
                                    <input type="file" class="input-fichier " id="photo" name="fichier">
                                    <label  for="customFile"></label>
                                </div>  
                            </div>
                        </div>
                    </div>                 
                    <input type="submit" class="btn btn-success" value="Valider" id="valider">
                </form>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
            <!-- <script src="Js/Controle_sasie.js"></script> -->
    </body>
</html>

