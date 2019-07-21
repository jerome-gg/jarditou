<div class="container">
    <a href="<?php echo site_url('Produits/boutique') ?>">Cliquez ici pour continuer vos achats</a>
    <div class="row ">
        <div class="col-lg-12">
            <h1>Détail du panier</h1> 
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <table class="table-striped ">
                <thead class="table table-bordered ">
                    <tr>
                        <td class="titre"><h4>Photos</h4></td>
                        <td class="titre"><h4>Libelle</h4></td>
                        <td class="titre"><h4>Quantité</h4></td>
                        <td class="titre"><h4>Prix HT</h4></td>
                        <td class="titre"><h4>Supprimer</h4></td>
                    </tr>
                </thead>  
                <tbody> 
                    <?php 
                    $i=0; 
                    $total = 0;
                    foreach ($panier as $key=>$value){  ?>
                        <tr> 
                            <td><img  class='photo rounded mx-auto d-block' src="<?php echo base_url("assets/images/{$value['pro_photo']}") ?>"></td> 
                            <td><?php echo $value['pro_name']; ?></td>
                            <td> 
                            <input type="text"  class="form-control input_quantite" name="nombre" id="<?php echo $value['pro_id'] ?>" value="<?php echo $_SESSION['user_panier'][$key]['nombre']; ?>" size="1" readonly>
                            <div class="quantite">
                                <div class="row">
                                    <div class="col-lg-3 offset-2">
                                        <i id="moins" name="moins<?php echo $value['pro_id'] ?>" class=" moins fas fa-minus-square fa-lg" ></i>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <i id="plus" name="plus<?php echo $value['pro_id'] ?>" class="plus fas fa-plus-square fa-lg" ></i>
                                    </div>
                                </div>
                            </div>
                            </td>
                            <td><input type="text" class="form-control somme" name="prix" id="somme<?php echo $value['pro_id'] ?>" value=" <?php echo round($value['pro_prix'] * $value['nombre'],2) ?>"  size="4" readonly></td>
                            
                            <!-- <td> <a href="<?php //echo site_url("Produits/panier_delete/".$value['pro_id'])  ?>"><img id="corbeille" src="<?php //echo base_url("assets/images/corbeille.png") ?>" alt="Corbeille"></a> </td> -->
                            <td> <a href="<?php echo site_url("Produits/panier_delete/".$value['pro_id'])  ?>"><i class="far fa-trash-alt fa-2x"></i></a></td>
                        </tr>
                    <?php  $i++; } ?> 
                </tbody>        
            </table>
        </div>
        <div class="col-lg-4">
            <div class="total">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
                    <div class="card-body card_panier">
                        <h4 class="">Total des achats</h4>
                        <p>TVA : 20 %</p>
                        <div>
                            <label for="total">Total TTC:</label>
                            <input type="text" class="form-control" name="total<?php echo $value['pro_id'] ?>" id="total" value="<?php echo $total  ?>" size="4" readonly>
                        </div>
                        <div>
                            <a href="<?php echo site_url("Produits/commander/") ?>" class="btn btn-primary">Valider ma commande</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    
</div>


<script>

var url = "http://localhost/ci/index.php";
 /**
  * --------------------------------------------------Modification du panier
  */

    // Prix total panier au chargement de la page 
    $(document).ready(function(){
        var total = 0;
        var i = 0;
        var a = $(".somme");// récupération de toute les éléments portant la classe somme
        a.val();// recupération de la valeur des éléments portant la classe somme sous forme d'objet
        $.each(a,function(){ // boucle sur l'objet de tableau 
            total += parseFloat( a[i].value);
            i++;
        })
        total+= total*0.2
        total.toFixed(2);
        $('#total').val(total.toFixed(2));// assignation de la valeur total 
    });

    // Ajout au panier
    $('.plus').click(function(){
        var id = $(this).attr("name");// on récupère le name de l'icone plus "pluss+ id"
        console.log(id);
        id = (id.substring(4)); // on extrait l'id avec substring
        var quantite = 1;
        var total = 0;
        var i = 0;
        $.ajax({
            type:"post",
            url: url + '/produits/panier_plus/',
            data: {id : id ,
                    nombre: quantite},
            dataType:"json",
            success:function(data)
            {
                console.log("coucou");
                $('#'+id).val(data.qte[0].nombre);// met à jour le nombre d'articles
                $('#somme'+id).val((data.qte[0].nombre * data.qte[0].pro_prix).toFixed(2));// met à jour le total des articles
                /**
                 * calcul de la somme total
                 */
                var a = $(".somme");// recupération de toute les éléments portant la classe somme
                console.log(a);
                a.val();// recupération de la valeur des éléments portant la classe somme sous forme d'objet
                $.each(a,function(){ // boucle sur l'objet de tableau 

                    total += parseFloat( a[i].value);
                    i++;
                })
                $('#total').val(total.toFixed(2));// assigantion de la valeur total
            }
        })
    })

    // Retrait du panier
    $('.moins').click(function(){
        var id = $(this).attr("name");// on récupère le name de l'icone moins "moins+ id"
        id = (id.substring(5));// on extrait l'id avec substring
        var quantite = 1;
        var total = 0;
        var i = 0;
        $.ajax({
            type:"post",
            url: url + '/produits/panier_moins/',
            data: {id : id ,
                    nombre: quantite},
            dataType:"json",
            success:function(data)
            {
                $('#'+id).val(data.qte[0].nombre);
                $('#somme'+id).val((data.qte[0].nombre * data.qte[0].pro_prix).toFixed(2));
                /**
                 * calcul de la somme total
                 */
                var a = $(".somme");// recupération de toute les éléments portant la classe somme
                a.val();// recupération de la valeur des éléments portant la classe somme sous forme d'objet
                $.each(a,function(){ // boucle sur l'objet de tableau 
                    total += parseFloat( a[i].value);
                    i++;
                })
                $('#total').val(total.toFixed(2));// assignation de la valeur total
            }
        })
    })
</script>