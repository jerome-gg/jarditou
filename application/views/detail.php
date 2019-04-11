
<!DOCTYPE html>
<html>
<head>
    <title>detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo site_url('assets/css/detail.css');?>">

</head>

    
    <body>
        <header>
            <nav class="nav">
                <a class="nav-link active" href="<?php echo site_url('Produits/liste') ?>">Acceuil</a>
                <!-- <a class="nav-link" href="<?php //echo site_url('Product/liste').'.'.$$detail->pro_id; ?>">Modifier</a> -->
            </nav>
            <h1>Formulaire de détails</h1>
        </header>
        
            <div class="container">
                <form action="" method="" id="">
                    <div class="$row">
                        <div class="form-group col-sm-5">
                            <label for="formGroupExampleInput">ID</label>
                            <input type="text" class="form-control" name="pro_id" id="formGroupExampleInput" value="<?php echo $detail->pro_id;?>" readonly>
                        </div>
                        <div class="form-group col-sm-5 offset-2">
                            <label for="formGroupExampleInput2">Référence</label>
                            <input type="text" class="form-control" name="pro_ref" id="formGroupExampleInput2" value="<?php echo $detail->pro_ref; ?>"readonly>
                        </div>
                    </div>
                    <div class="$row">
                        <div class="form-group col-sm-5">
                            <label for="formGroupExampleInput2">Catégorie</label>
                            <input type="text" class="form-control" name="cat_id" id="formGroupExampleInput2" value="<?php echo $detail->pro_cat_id; ?>"readonly>
                        </div>
                        <div class="form-group col-sm-5 offset-2">
                            <label for="formGroupExampleInput2">Libéllé</label>
                            <input type="text" class="form-control" name="pro_libelle" id="formGroupExampleInput2" value="<?php echo $detail->pro_libelle; ?>"readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="pro_description" id="exampleFormControlTextarea1" rows="3" value=""readonly><?php echo $detail->pro_description; ?></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-5">
                            <label for="formGroupExampleInput2">Prix</label>
                            <input type="text" class="form-control" name="pro_prix" id="formGroupExampleInput2" value="<?php echo $detail->pro_prix; ?>"readonly>
                        </div>
                        <div class="form-group col-sm-5 offset-2">
                            <label for="formGroupExampleInput2">Stock</label>
                            <input type="text" class="form-control" name="pro_stock" id="formGroupExampleInput2" value="<?php echo $detail->pro_stock; ?>"readonly>
                        </div>
                    </div>
                    <div class="$row"> 
                        <!-- <div class="bloque col-sm-5">
                            <?php //if($bloque){ ?>
                                <div class="form-group">
                                    <label for="pro_bloque">Produit bloqué</label>
                                    <input type="text" class="form-control" name="pro_bloque" id="pro_bloque" value="Oui"readonly>
                                </div>
                                <?php// }else{ ?>
                                <div class="form-group">
                                    <label for="pro_bloque">Produit bloqué</label>
                                    <input type="text" class="form-control" name="pro_bloque" id="pro_bloque" value="Non"readonly>
                                </div>
                                <?php// } ?>
                        </div> -->
                        <div class="form-group col-sm-5 offset-2">
                            <label for="formGroupExampleInput2">Couleur</label>
                            <input type="text" class="form-control" name="pro_couleur" id="formGroupExampleInput2" value="<?php echo $detail->pro_couleur; ?>"readonly>
                        </div>
                    </div>
                    <p class="date" value="">Date d'ajout : <?php echo $detail->pro_d_ajout ?></p>
                    <p class="date" value="">Date de modification : <?php echo $detail->pro_d_modif ?></p>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                   
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
                            <a  class="btn btn-secondary non" href="index2.php" >Non</a>
                            <button type="submit" class="btn btn-danger" formaction="script_traitement/script_suppression.php" >Oui</button>
                          </div>
                        </div>
                      </div>
                    </div> 
                </div>

                               


        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                           
        
    </body>
</html>









