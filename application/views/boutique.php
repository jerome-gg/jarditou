
    <div class="row d-flex justify-content-around nav-boutique">
        <button  type="button" class="btn btn-outline-dark" id="all">Voir tout les produits</button>
        <button  type="button" class="btn btn-outline-dark" value="1" id="outillage">Outillage</button>
        <button  type="button" class="btn btn-outline-dark" value="4" id="plants">Plants et semis</button>
        <button  type="button" class="btn btn-outline-dark" value="5" id="arbres">Arbres arbuste</button>
        <button  type="button" class="btn btn-outline-dark" value="6" id="accessoires">Pot et accesoires</button>
        <button  type="button" class="btn btn-outline-dark" value="7" id="mobilier">Mobilier de jardin</button>
        <button  type="button" class="btn btn-outline-dark" value="8" id="materiaux">Matériaux</button>
    </div>
    


    <div class="container" id='boutique'>
      <div class="row" id="boutique2">
        <?php foreach($liste_produit as $row){ ?>
          <div class="card col-4" style="card" id="card">
          <div class="hauteur_photo mt-2">
            <img src="<?php echo base_url("assets/images/{$row->pro_id}.{$row->pro_photo}") ?>" class="card-img-top photo rounded mx-auto d-block" alt="...">
          </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row->pro_libelle ?></h5>
              <div>
                <p class="card-text"><?php echo $row->pro_description ?></p>
                <p class="card-text"><?php echo $row->pro_prix ?> €</p>
              </div>
            </div>
            <div class="mb-2 pl-1">
              <form method="post" action="<?php echo site_url('Produits/add_panier') ?>" >
                <label for="nombre" class="ml-3">Nombre d'articles:</label>
                <input type="number" id="nombre" class="rounded boutique-input" name="nombre" min="1" max="10" value="1" class="" size="2">
                <input type="hidden" id="pro_prix" name="pro_prix" value="<?php echo $row->pro_prix ?> ">
                <input type="hidden" id="pro_id" name="pro_id" value="<?php echo $row->pro_id ?>">
                <button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>
              </form>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <p><?php echo $link ?></p>


<script>
   /**
  * --------------------------------------------------Modification du panier
  */

    //Total panier au chargement de la page 
    $(document).ready(function(){
        var total = 0;
        var i = 0;
        var a = $(".somme");// récupération de toute les éléments portant la classe somme
        console.log(a);
        a.val();// recupération de la valeur des éléments portant la classe somme sous forme d'objet
        $.each(a,function(){ // boucle sur l'objet de tableau 
            total += parseFloat( a[i].value);
            i++;
             
        })
        total.toFixed(2);
        $('#total').val(total);// assigantion de la valeur total 
    });

    // Ajout au panier
    $('.plus').click(function(){
        var id = $(this).attr("name");// on récupère le name de l'icone plus "pluss+ id"
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

                $('#'+id).val(data.qte[0].nombre);// met à jour le nombre d'articles
                $('#somme'+id).val(data.qte[0].nombre * data.qte[0].pro_prix);// met à jour le total des articles
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
                total.toFixed(2);
                $('#total').val(total);// assigantion de la valeur total
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
                $('#somme'+id).val(data.qte[0].nombre * data.qte[0].pro_prix);
                /**
                 * calcul de la somme total
                 */
                var a = $(".somme");// recupération de toute les éléments portant la classe somme
                a.val();// recupération de la valeur des éléments portant la classe somme sous forme d'objet
                $.each(a,function(){ // boucle sur l'objet de tableau 
                    total += parseFloat( a[i].value);
                    i++;
                     
                })
                total.toFixed(2);
                $('#total').val(total);// assigantion de la valeur total
            }
        })
    })
</script>
    


    
   
