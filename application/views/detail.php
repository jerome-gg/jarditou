
            <h1>Formulaire de détails</h1>
            <div class="container">
                <form action="" method="" id="">
                    <div class="$row groupe">
                        <div class=" col-sm-5 ">
                            <div class="form-group">
                                <label for="formGroupExampleInput">ID</label>
                                <input type="text" class="form-control" name="pro_id" id="formGroupExampleInput" value="<?php echo $detail->pro_id;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Référence</label>
                                <input type="text" class="form-control" name="pro_ref" id="formGroupExampleInput2" value="<?php echo $detail->pro_ref; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Catégorie</label>
                                <input type="text" class="form-control" name="cat_id" id="formGroupExampleInput2" value="<?php echo $detail->pro_cat_id; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Libéllé</label>
                                <input type="text" class="form-control" name="pro_libelle" id="formGroupExampleInput2" value="<?php echo $detail->pro_libelle; ?>"readonly>
                            </div>
                            <div class="form-group ">
                                <label for="formGroupExampleInput2">Couleur</label>
                                <input type="textarea" class="form-control" name="pro_couleur" id="formGroupExampleInput2" value="<?php echo $detail->pro_couleur; ?>"readonly>
                            </div>
                        </div>
                        <div class="col-sm-5 offset-1">
                            <div class="form-group ">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control textearea" name="pro_description" id="exampleFormControlTextarea1"     readonly><?php echo $detail->pro_description; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Prix</label>
                                <input type="text" class="form-control" name="pro_prix" id="formGroupExampleInput2" value="<?php echo $detail->pro_prix; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Stock</label>
                                <input type="text" class="form-control" name="pro_stock" id="formGroupExampleInput2" value="<?php echo $detail->pro_stock; ?>"readonly>
                            </div>
                        </div>
                    </div>

                    <div class="$row"> 
                        <div class="bloque col-sm-5">
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

                    
                    <p class="date " value="">Date d'ajout : <?php echo $detail->pro_d_ajout ?></p>
                    <p class="date " value="">Date de modification : <?php echo $detail->pro_d_modif ?></p>
                    <a type="button" class="btn btn-warning" value="" href ="<?php echo site_url('Produits/modif/'.$detail->pro_id);?>">Modifier l'article</a>
                    <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                   
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

                </form>
            </div>
                    
                    
                    
                        
                    
           

                               


        










