var url = "http://localhost/ci/index.php";
/**
 * Treeview
 */
/* $(document).ready(function(){ 
    $.ajax({
        type: "GET",
        url: url + '/produits/menu',
        dataType: "json",
        success:function(data)
        {   
            $('#tree').treeview({
                data : data,
                level : 6,
                backColor: '#fff',
                borderColor: '#ced4da',
            });
            var i = 0;
            $.each(data, function(){
            $('#tree').treeview(url +'/produits/menu',);
            });
        }
    }); */
    /* $.ajax({
        type: "GET",
        url: url + '/produits/menu',
        dataType: "json",
        success:function(data)
        {
            var i = 0;
            $.each(data, function(){
                $('#cat').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                i++;
            });
        }
    }); */
/* }); */


/* $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: url + '/produits/menu',
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            var i = 0;
            $.each(data, function(){
                $('#tree').treeview({
                    data : data,
                    level : 1,
                    backColor: '#b6de8f',
                    borderColor: 'black',
                    color: 'black',
                }); */
                /* var i = 0;
                $.each(data, function(){
                $('#tree').treeview({data: data});
                i++;
                }); */
                
           /*  });
        }
    });
}); */


/**
 *  Menu en ajax
 */
/* $('#cat2').hide();
$('#cat3').hide();
$('#cat4').hide(); */







/**
 * methode d'envoi de données avec get ou post 
 * nécessite de récupérer les données avec 
 * $this->input->get ou post('parametre avec lequel il a été envoyé')
 */

/* $('#cat').change(function(){
    var categorie = $('#cat').val();
    $.ajax({
        type: "GET",
        url: url + '/produits/menu2/',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            $('#cat2').remove();
            var i = 0;
            $('#tree').append(" <select name='categorie3 col-5' class='custom-select cat2' id='cat2'></select>");
            $.each(data, function(){
                $('#cat2').append('<option> Faites votre choix</option>');
                $('#cat2').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                i++;
            })

        }
    })
})

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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
                i++;
            })
        }
    })
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="http://localhost/ci/assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + ' €</p> <form method="post" action="http://localhost/ci/index.php/Produits/add_panier"><label for="nombre">Nombre d\'articles:</label><input type="number" id="nombre" name="nombre" class="rounded boutique-input" min="1" max="10" value="1"><input type="hidden" id="pro_prix" name="pro_prix" value="'+data[i].pro_prix +'"><input type="hidden" id="" name="pro_id" value="'+data[i].pro_id +'"><button type="submit" class="btn btn-primary offset-3">Ajouter</button></form>');
                i++;
            })
        }
    })
 })


    
/**
 * ------------------------------------------------------Ajout d'article
 */

    

    
