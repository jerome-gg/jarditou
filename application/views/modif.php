

        <h1>Formulaire de modification d'article</h1>
            <div class="container">
                <form action="<?php site_url('Produits/modif') ?>" method="post" name="formulaire modification" enctype="multipart/form-data" id="formulaire">
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
                            <input type="text" class="form-control" name="pro_couleur" id="couleur" value="<?php echo $requete->pro_couleur; ?>">
                            <div class="red" id="errCoulSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                        </div>   
                    </div>
                                                                                                <!-- champs catégorie et libélé -->
                    <!-- <div class="row cat-lib">                                                   
                        <div class="categorie col-5 ">
                            <p class="P">Catégorie</p>
                            <div class="input-group ">
                                <select class="custom-select" name="cat_id" id="categorie" >
                                    <?php foreach($liste_categorie as $row){ ?>
                                    <option value='<?php echo $row->cat_id ?>'><?php echo $row->cat_nom ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-5 offset-2">
                            <label for="libelle">Libéllé</label>
                            <input type="text" class="form-control" name="pro_libelle" id="libelle" value="<?php echo $requete->pro_libelle; ?>" placeholder="Nom du produit">
                            <div class="red" id="errLibVide">
                                <p>Veuillez remplir le champ.</p>
                            </div>
                            <div class="red" id="errLibSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                            <?php echo form_error('pro_libelle', '<div class= "red" >', '</div>'); ?>
                        </div>
                    </div> -->
                    
                    <div class="row cat-lib">                                                   <!-- champs catégorie et libélé -->
                        <div class="categorie col-5 ">
                            <!-- menu ajax  -->
                            <div id="tree">
                                <label for="cat">Catégorie</label>                             
                            </div>
                            <input type="hidden" name="cat_id" id="categorie" value=""> 
                            <?php echo form_error('cat_id'); ?> 
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
                            <?php echo form_error('pro_libelle'); ?>
                        </div>
                        
                    </div>

                    <div class="form-group">                                                    <!-- champ description -->
                        <label for="description">Description</label>
                        <textarea class="form-control" name="pro_description" id="description" rows="3"><?php echo $requete->pro_description; ?></textarea>
                        <div class="red" id="errDescSaisie">
                            <p>Veuillez entrer une saisie valide.</p>
                        </div>
                        <?php echo form_error('pro_description', '<div class= "red" >', '</div>'); ?>
                    </div>
                    <div class="row">                                                           <!-- champs prix et stock -->
                        <div class="form-group col-5">
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" name="pro_prix_ht" id="prix" value="<?php echo $requete->pro_prix_ht; ?>">
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
                            <input type="text" class="form-control" name="pro_stock" id="stock" value="<?php echo $requete->pro_stock; ?>">
                            <div class="red" id="errRStkVide">
                                <p>Veuillez remplir le champ.</p>
                            </div>
                            <div class="red" id="errRStkSaisie">
                                <p>Veuillez entrer une saisie valide.</p>
                            </div>
                            <?php echo form_error('pro_stock', '<div class= "red" >', '</div>'); ?>
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

                    <div class="row">
                        <div class="chieur col-5">
                            <p class="P">Photo </p>
                            <div class="input-group mb-2 ">
                                <div class="custom-file">
                                    <input type="file" class="input-fichier " id="photo" name="fichier">
                                    <label  for="customFile"></label>
                                </div>  
                            </div>
                        </div>
                        <div class="col-5 offset-2">
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
                        </div>
                        
                    </div>
                   
                    

                           
                    <input type="submit" class="btn btn-success" value="Valider les modifications" id="valider">
                </form>
            </div>

            <script>
/**
 * methode d'envoi de données avec get ou post 
 * nécessite de récupérer les données dans le paramètre de la fonction 
 * public function('paramètre avec lequel il a été envoyé')
 */
$(document).ready(function(){

    var url = "http://localhost/ci/index.php";
    
    /**
     * Génère le sélect de base avec les catégories parents
     */
    $.ajax({
        type: "GET",
        /* url: '<?php //echo site_url("produits/menu/") ?>', */
        url: url + '/produits/menu/' + 0,
        dataType: "json",
        success:function(data)
        {
            var i = 0;
            $('#cat2').remove();
            $('#cat3').remove();
            $('#cat4').remove();
            $('#tree').append('<select  class="custom-select" id="cat"></select>');
            $('#cat').append('<option value="">Sélectionnez votre catégorie</option>');
            $.each(data, function(){
                $('#cat').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                i++;
            });
            /**
             * prend en compte la valeur du 1er select pour générer le 2e
             */
            $('#cat').change(function(){
                var categorie = $('#cat').val();
                $('#categorie').val(categorie);
                var a = $('#categorie').val();
                $.ajax({

                    type: "GET",
                    url: url + '/produits/menu/'+ categorie,
                    dataType: "json",
                    success:function(data)
                    {
                        var i = 0;
                        $('#cat2').remove();
                        $('#cat3').remove();
                        $('#cat4').remove();
                        $('#tree').append(" <select id='cat2'  class='custom-select cat2' ></select>");
                        $('#cat2').append('<option value="0"> Faites votre choix</option>');
                        $.each(data, function(){
                            $('#cat2').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                            i++;
                        });
                        /**
                         * prend en compte la valeur du 2e select pour générer le 3e
                         */
                        $('#cat2').change(function(){
                            var categorie = $('#cat2').val();
                            $('#categorie').val(categorie);
                            var a = $('#categorie').val();
                            $.ajax({
                                type: 'GET',
                                url: url + '/produits/menu/'+ categorie,
                                dataType: "json",
                                success:function(data)
                                {
                                    if (data.length>0) { 
                                        var i = 0;
                                        $('#cat3').remove();
                                        $('#cat4').remove();
                                        $('#tree').append(" <select id='cat3'  class='custom-select cat3' ></select>");
                                        $('#cat3').append('<option value="0"> Faites votre choix</option>');
                                        $.each(data, function(){
                                            $('#cat3').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                                            i++;
                                        })

                                        /**
                                        * prend en compte la valeur du 3e select pour générer le 4e
                                        */
                                        $('#cat3').change(function(){
                                            var categorie = $('#cat3').val();
                                            $('#categorie').val(categorie);
                                            var a = $('#categorie').val();
                                            $.ajax({
                                                type: 'GET',
                                                url: url + '/produits/menu/'+ categorie,
                                                dataType: "json",
                                                success:function(data)
                                                {
                                                    if (data.length>0) { 
                                                        var i = 0;
                                                        $('#cat4').remove();
                                                        $('#tree').append(" <select id='cat4'  class='custom-select cat4' ></select>");
                                                        $('#cat4').append('<option value="0"> Faites votre choix</option>');
                                                        $.each(data, function(){
                                                            $('#cat4').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                                                            i++;
                                                        })
                                                        
                                                    }// end if  (data.lenght>0) 4e input
                                                    // bloc pour la selection de la 4e catégorie.
                                                    $('#cat4').change(function(){
                                                        var categorie = $('#cat4').val();
                                                        
                                                        $('#categorie').val(categorie);
                                                        var a = $('#categorie').val();
                                                    }) 
                                                }
                                            })
                                        }) // 4e bloc en fonction du 3e
                                    } // end if  (data.lenght>0) 3e input
                                }
                            })
                        });// 3e bloc en fonction du 2e
                    }
                });
            });// 2e bloc en fonction du 1er 
        }
    });
});


</script>
