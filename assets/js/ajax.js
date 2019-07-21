var url = "http://localhost/ci/index.php";


/**
* --------------------------------------------------Ajax partie boutique 
*/

/**
* --------------------------------------------------Appel des produits par catégorie
*/

$(document).ready(function(){
    $.ajax({
        url: url + '/produits/liste_boutique_complete/',
        dataType: "json",
        success:function(data)
        {
            $('#boutique2').remove();
            $('#boutique').html('<div class="row" id="boutique2"></div>');
            var i = 0;
            $.each(data, function(){
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                +'<div class="boxPhoto mt-2">'
                +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                +'</div><div class="card-body">'
                +'<h5 class="card-title">' +data[i].pro_libelle + '</h5> '
                +'<div class="cardText">'
                +'<p class="card-text description">' + data[i].pro_description + '</p>'
                +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                +'<label for="nombre">Nombre d\'articles:</label>'
                +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                +'</form>');
                i++;
            })
        }
    })

    $('#all').click(function(){
        $.ajax({
            url: url + '/produits/liste_boutique_complete/',
            dataType: "json",
            success:function(data)
            {
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label>'
                    +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })
            }
        })
    })


    $('#outillage').click(function(){
        var categorie = $('#outillage').val();
        $.ajax({
            type: "get",
            url: url + '/Produits/liste_boutique/',
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            {
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })
            }
        })
    })

    $('#plants').click(function(){

        var categorie = $('#plants').val();
        $.ajax({
            type: "get",
            url: url + '/Produits/liste_boutique/',
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            { 
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label>'
                    +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })    
            }
        })
    })

    $('#arbres').click(function(){
        var categorie = $('#arbres').val();
        $.ajax({
            type: "get",
            url: url + '/Produits/liste_boutique/',
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            {
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label>'
                    +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })
            }
        })
    })


    $('#accessoires').click(function(){
        var categorie = $('#accessoires').val();
        $.ajax({
            type: "get",
            url: url + '/Produits/liste_boutique/',
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            {
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label>'
                    +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })
            }
        })
    })


    $('#mobilier').click(function(){
        var categorie = $('#mobilier').val();
        $.ajax({
            type: "get",
            url: url + '/Produits/liste_boutique/',
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            {
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label>'
                    +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })
            }
        })
    })


    $('#materiaux').click(function(){
        var categorie = $('#materiaux').val();
        $.ajax({
            type: "get",
            url: url + '/Produits/liste_boutique/',
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            {
                $('#boutique2').remove();
                $('#boutique').html('<div class="row" id="boutique2"></div>');
                var i = 0;
                $.each(data, function(){
                    $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card>'
                    +'<div class="boxPhoto mt-2">'
                    +'<img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo2 rounded mx-auto d-block">'
                    +'</div><div class="card-body">'
                    +'<h5 class="card-title">' +data[i].pro_libelle + '</h5>'
                    +'<div class="cardText">'
                    +'<p class="card-text description">' + data[i].pro_description + '</p>'
                    +'</div><p class="card-text prix">' + data[i].pro_prix_ht + '€</p>'
                    +'<form method="post" action="http://localhost/ci/index.php/Produits/add_panier">'
                    +'<label for="nombre">Nombre d\'articles:</label>'
                    +'<input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1">'
                    +'<input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix_ht +'">'
                    +'<input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'">'
                    +'<button type="submit" class="btn btn-primary offset-3 ajout">Ajouter</button>'
                    +'</form>');
                    i++;
                })
            }
        })
    }) 
})




    

    

    
