

        <h1>Formulaire ajout d'article</h1>
            <div class="container">
                <form action="" method="post" name="" enctype="multipart/form-data" id="formulaire">
                    <div class="row">                                                           <!-- champs couleur et référence -->
                        <div class="form-group col-5 ">
                            <label for="reference">Référence</label>
                            <input type="text" class="form-control ref" name="pro_ref" id="reference" value="<?php echo $requete->pro_ref; ?>" placeholder="Référence produit">
                        </div>                                                           
                        <div class="form-group col-5 offset-2">                                                    
                            <label for="couleur">Couleur</label>
                            <input type="text" class="form-control" name="pro_couleur" id="couleur" value="<?php echo $requete->pro_couleur; ?>">
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
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="libelle">Libéllé</label>
                            <input type="text" class="form-control" name="pro_libelle" id="libelle" value="<?php echo $requete->pro_libelle; ?>" placeholder="Nom du produit">
                        </div>
                    </div>

                    <div class="form-group">                                                    <!-- champ description -->
                        <label for="description">Description</label>
                        <textarea class="form-control" name="pro_description" id="description" rows="3" value="<?php echo $requete->pro_description; ?>"></textarea>
                    </div>
                    <div class="row">                                                           <!-- champs prix et stock -->
                        <div class="form-group col-5">
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" name="pro_prix" id="prix" value="<?php echo $requete->pro_prix; ?>">
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" name="pro_stock" id="stock" value="<?php echo $requete->pro_stock; ?>">
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
                        <div class="form-group col-5 offset-2">
                            <label for="pro_d_ajout">Date d'ajout</label>
                            <input type="text" class="form-control" name="pro_d_ajout" id="date_ajout" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div> 
                    </div>          
                    <input type="submit" class="btn btn-success" value="Valider" id="valider">
                </form>
            </div>
