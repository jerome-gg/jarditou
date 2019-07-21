
            <h1>Formulaire de détails</h1>
            <div class="container">
                <form action="" method="" id="">
                    <div class="row">
                        <div class=" col-lg-6 col-md-12">
                            <div class="photo_box">
                                <img  class="photo_detail img-responsive" src="<?php echo base_url("assets/images/{$detail->pro_id}.{$detail->pro_photo}")?>" alt="photo du produit">
                            </div>
                        </div>
                        <div class=" col-lg-6 col-md-12 box_id_ref">    
                            <div class=" col-lg-12 col-md-12 ">
                                <div class="form-group ">
                                    
                                    <input type="hidden" class="form-control" name="pro_id" id="id" value="<?php echo $detail->pro_id;?>" readonly>
                                </div>
                            </div> 
                            <div class=" col-lg col-md-12"> 
                                <div class="form-group ">
                                    <label for="reference">Référence</label>
                                    <input type="text" class="form-control" name="pro_ref" id="reference" value="<?php echo $detail->pro_ref; ?>"readonly>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="  col-lg col-md-12">
                            <div class="form-group">
                                <label for="categorie">Catégorie</label>
                                <input type="text" class="form-control" name="cat_id" id="categorie" value="<?php echo $detail->cat_id; ?>"readonly>
                            </div>
                        </div>
                        <div class="  col-lg col-md-12">
                            <div class="form-group">
                                <label for="libelle">Libéllé</label>
                                <input type="text" class="form-control" name="pro_libelle" id="libelle" value="<?php echo $detail->pro_libelle; ?>"readonly>
                            </div>
                        </div>
                        <div class="  col-lg col-md-12">
                            <div class="form-group ">
                                <label for="couleur">Couleur</label>
                                <input type="textarea" class="form-control" name="pro_couleur" id="couleur" value="<?php echo $detail->pro_couleur; ?>"readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-lg col-md-12">
                            <div class="form-group ">
                                <label for="description">Description</label>
                                <textarea class="form-control textearea" name="pro_description" id="description" readonly><?php echo $detail->pro_description; ?></textarea>
                            </div>
                        </div>
                        <div class=" col-lg col-md-12">
                            <div class="bloque">
                            <?php if($detail->pro_bloque){ ?>
                                <div class="form-group">
                                    <label for="pro_bloque">Produit bloqué</label>
                                    <input type="text" class="form-control" name="pro_bloque" id="pro_bloque" value="Oui"readonly>
                                </div>
                                <?php }else{ ?>
                                <div class="form-group">
                                    <label for="pro_bloque">Produit bloqué</label>
                                    <input type="text" class="form-control" name="pro_bloque" id="pro_bloque" value="Non"readonly>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="text" class="form-control" name="pro_prix" id="prix" value="<?php echo $detail->pro_prix_ht; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" name="pro_stock" id="stock" value="<?php echo $detail->pro_stock; ?>"readonly>
                            </div>
                        </div>
                        <div class=" col-lg col-md-12">
                            <div class="form-group">
                                <label for="date_ajout">Date d'ajout</label>
                                <input type="date" class="form-control" name="pro_d_ajout" id="date_ajout" value="<?php echo $detail->pro_d_ajout; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="date_modif">Date de modification</label>
                                <?php if($detail->pro_d_modif == null){ ?>
                                    <input type="text" class="form-control" name="pro_d_modif" id="date_modif" value="Pas de modification."readonly>
                                <?php }else{ ?>
                                    <input type="datetime" class="form-control" name="pro_d_modif" id="date_modif" value="<?php  echo date('d/m/Y H:i:s',strtotime($detail->pro_d_modif)); ?>"readonly>
                                <?php } ?>    
                            </div>
                            <div class="form-group validation">
                                <a type="button" class="btn btn-warning modifier " value="" href ="<?php echo site_url("Produits/modif/{$detail->pro_id}");?>">Modifier l'article</a>
                                <button type="button" class="btn btn-danger supprimer" data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Voulez-vous vraiment supprimer l'article?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a  class="btn btn-secondary non" href="<?php echo site_url('Produits/liste'); ?>" >Non</a>
                                                <button type="submit" class="btn btn-danger" formaction = "<?php echo site_url('Produits/supprime');?>">Oui</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
      
                    
                    
                        
                    
           

                               


        










