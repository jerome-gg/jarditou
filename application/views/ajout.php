
<!-- <form action="<?php// echo site_url('Produits/ajout');?>" method="post" name="" enctype="multipart/form-data" id="formulaire">
 -->
        <h1>Formulaire ajout d'article</h1>
        <?php echo form_open_multipart(''); ?>
            <div class="container">
                    <div class="row">                                                           <!-- champs couleur et référence -->
                        <div class="form-group col-5 ">
                            <label for="reference">Référence</label>
                            <input type="text" class="form-control ref" name="pro_ref" id="reference" value="" placeholder="Référence produit" size="10" >
                            <div class="red" id="errRefVide">
                                <p>Veuillez remplir le champ.</p>
                            </div>
                            <div class="red" id="errRefSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                            <?php echo form_error('pro_ref', '<div class= "red">', '</div>'); ?>
                        </div>                                                           
                        <div class="form-group col-5 offset-2">                                                    
                            <label for="couleur">Couleur</label>
                            <input type="text" class="form-control" name="pro_couleur" id="couleur" value="" size="30">
                            <div class="red" id="errCoulSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                        </div>   
                    </div>
                    <div class="row cat-lib">                                                   <!-- champs catégorie et libélé -->
                        <div class="categorie col-5 ">
                            <p class="P">Catégorie</p>
                            <div class="input-group ">
                                <select class="custom-select" name="pro_cat_id" id="categorie" >
                                    <?php foreach($liste_categorie as $row){ ?>
                                    <option value='<?php echo $row->cat_id ?>'><?php echo $row->cat_nom ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <!-- menu ajax  -->
                            <div id="tree">
                                <label for="cat">Catégorie</label>
                                <!-- <select name="categorie col-5" class="custom-select" id="cat">
                                    <option value=''>Choisissez votre catégorie</option>
                                </select>
                                <select name="categorie2 col-5" class="custom-select" id="cat2">
                                    <option value=''>Choisissez votre catégorie</option>
                                </select>
                                <select name="categorie3 col-5" class="custom-select" id="cat3">
                                    <option value=''>Choisissez votre catégorie</option>
                                </select>
                                <select name="categorie4 col-5" class="custom-select" id="cat4">
                                    <option value=''>Choisissez votre catégorie</option>
                                </select> -->
                                
                            </div>
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="libelle">Libéllé</label>
                            <input type="text" class="form-control" name="pro_libelle" id="libelle" value="" placeholder="Nom du produit" size="200" >
                            <div class="red" id="errLibVide">
                                <p>Veuillez remplir le champ.</p>
                            </div>
                            <div class="red" id="errLibSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                            <?php echo form_error('pro_libelle', '<div class= "red" >', '</div>'); ?>
                        </div>
                        
                    </div>

                    <div class="form-group">                                                    <!-- champ description -->
                        <label for="description">Description</label>
                        <textarea class="form-control" name="pro_description" id="description" rows="3" size="1000"
                            value=""></textarea>
                        <div class="red" id="errDescSaisie">
                            <p>Veuillez entrer une saisie valide.</p>
                        </div>
                        <?php echo form_error('pro_description', '<div class= "red" >', '</div>'); ?>
                    </div>
                    <div class="row">                                                           <!-- champs prix et stock -->
                        <div class="form-group col-5">                            
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" name="pro_prix" id="prix" value="" size="6" >
                            <div class="red" id="errPrixVide">
                                <p>Veuillez remplir le champ.</p>
                            </div>
                            <div class="red" id="errPrixSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                            <?php echo form_error('pro_prix', '<div class= "red" >', '</div>'); ?>
                        </div>
                        
                        <div class="form-group col-5 offset-2">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" name="pro_stock" id="stock" value="" size="11" >
                            <div class="red" id="errRStkVide">
                                <p>Veuillez remplir le champ.</p>
                            </div>
                            <div class="red" id="errRStkSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                            <?php echo form_error('pro_stock', '<div class= "red" >', '</div>'); ?>
                        </div>
                        
                    </div>
                    <div class="row">                                                           <!-- champ photo  -->
                        <div class="chieur col-5">
                            <p class="P">Photo </p>
                            <div class="input-group mb-2 ">
                                <div class="custom-file">
                                    <input type="file" class="input-fichier " id="photo" name="fichier">
                                    <label  for="customFile"></label>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="pro_d_ajout">Date d'ajout</label>
                            <input type="text" class="form-control" name="pro_d_ajout" id="date_ajout" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div> 
                    </div>          
                    <input type="submit" class="btn btn-success" value="Valider" id="valider">
                </form>
            </div>
