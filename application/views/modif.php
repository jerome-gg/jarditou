

        <h1>Formulaire de modification d'article</h1>
            <div class="container">
                <form action="<?php site_url('Produits/modif_liste') ?>" method="post" name="formulaire modification" enctype="multipart/form-data" id="formulaire">
                    <div class="form-group col-5 ">
                        <label for="id" hidden>Id</label>
                        <input type="hidden" class="form-control ref" name="pro_id" id="id" value="<?php echo $requete->pro_id; ?>" placeholder="Référence produit" readonly >
                    </div>
                    <div>
                        <input type="hidden" name="pro_photo" value="<?php echo $requete->pro_photo;?>">
                    </div>
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
                    <div class="row">
                        <div class="form-group col-5 ">                                         <!-- champs date de modification  -->
                            <label for="date_modif">Date de modification</label>
                            <input type="text" class="form-control" name="pro_d_modif" id="date_modif" value="<?php echo date('Y-m-d H:m:s'); ?>" readonly>
                        </div>
                        <div class="form-group col-5 offset-2">                                 <!-- champs date d'ajout  -->
                            <label for="pro_d_ajout">Date d'ajout</label>
                            <input type="text" class="form-control" name="pro_d_ajout" id="date_ajout" value="<?php echo $requete->pro_d_ajout; ?>" readonly>
                        </div> 
                    </div> 
                                                                                                <!-- champs produit bloqué  -->
                   <?php if($requete->pro_bloque){ ?>
                    <div class="form-group">
                        <p>Produit bloqué :</p>
                        <input type="radio" class="" name="pro_bloque" id="bloque_oui" value="1" checked>
                        <label for="bloque_oui">oui</label>
                        <input type="radio" class="" name="pro_bloque" id="bloque_non" value="0">
                        <label for="bloque_non">non</label>
                    </div>
                   <?php }else{ ?>
                        <div class="form-group">
                            <p>Produit bloqué :</p>
                            <input type="radio" class="" name="pro_bloque" id="bloque_oui" value="1">
                            <label for="bloque_oui">oui</label>
                            <input type="radio" class="" name="pro_bloque" id="bloque_non" value="0" checked>
                            <label for="bloque_non">non</label>
                        </div> 
                    <?php } ?>
                    

                           
                    <input type="submit" class="btn btn-success" value="Valider les modifications" id="valider">
                </form>
            </div>
