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
 * nécessite de récupérer les données dans le paramètre de la fonction 
 * public function('paramètre avec lequel il a été envoyé')
 */
$(document).ready(function(){
    /**
     * Génère le sélect de base avec les catégories parents
     */
    $.ajax({
        type: "GET",
        url: url + '/produits/menu',
        dataType: "json",
        success:function(data)
        {
            var i = 0;
            $('#tree').append('<select name="categorie col-5" class="custom-select" id="cat"></select>');
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
                        $('#tree').append(" <select id='cat2' name='categorie3 col-5' class='custom-select cat2' ></select>");
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
                                        $('#tree').append(" <select id='cat3' name='categorie3 col-5' class='custom-select cat3' ></select>");
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
                                            $.ajax({
                                                type: 'GET',
                                                url: url + '/produits/menu/'+ categorie,
                                                dataType: "json",
                                                success:function(data)
                                                {
                                                    if (data.length>0) { 
                                                        var i = 0;
                                                        $('#cat4').remove();
                                                        $('#tree').append(" <select id='cat4' name='categorie3 col-5' class='custom-select cat4' ></select>");
                                                        $('#cat4').append('<option value="0"> Faites votre choix</option>');
                                                        $.each(data, function(){
                                                            $('#cat4').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                                                            i++;
                                                        })
                                                    }// end if  (data.lenght>0) 4e input   
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
 * --------------------------------------------------Ajax partie boutique appel des produits par catégorie
 */

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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
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
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
                i++;
            })
        }
    })
 })

 $('#plants').click(function(){
    var categorie = $('#plants').val();
    console.log(categorie);
    $.ajax({
        type: "get",
        url: url + '/Produits/liste_boutique/',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            $('#boutique2').remove();
            $('#boutique').html('<div class="row" id="boutique2"></div>');
            var i = 0;
            $.each(data, function(){
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
                i++;
            })
        }
    })
 })

 $('#arbres').click(function(){
    var categorie = $('#arbres').val();
    console.log(categorie);
    $.ajax({
        type: "get",
        url: url + '/Produits/liste_boutique/',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            $('#boutique2').remove();
            $('#boutique').html('<div class="row" id="boutique2"></div>');
            var i = 0;
            $.each(data, function(){
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
                i++;
            })
        }
    })
 })


 $('#accessoires').click(function(){
    var categorie = $('#accessoires').val();
    console.log(categorie);
    $.ajax({
        type: "get",
        url: url + '/Produits/liste_boutique/',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            $('#boutique2').remove();
            $('#boutique').html('<div class="row" id="boutique2"></div>');
            var i = 0;
            $.each(data, function(){
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
                i++;
            })
        }
    })
 })


 $('#mobilier').click(function(){
    var categorie = $('#mobilier').val();
    console.log(categorie);
    $.ajax({
        type: "get",
        url: url + '/Produits/liste_boutique/',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            $('#boutique2').remove();
            $('#boutique').html('<div class="row" id="boutique2"></div>');
            var i = 0;
            $.each(data, function(){
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
                i++;
            })
        }
    })
 })


 $('#materiaux').click(function(){
    var categorie = $('#materiaux').val();
    console.log(categorie);
    $.ajax({
        type: "get",
        url: url + '/Produits/liste_boutique/',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            $('#boutique2').remove();
            $('#boutique').html('<div class="row" id="boutique2"></div>');
            var i = 0;
            $.each(data, function(){
                $('#boutique2').append('<div class="card col-4" style="width: 18rem;" id=card> <img src="../../assets/images/' + data[i].pro_id +'.'+ data[i].pro_photo + '" ' + 'class="card-img-top photo rounded mx-auto d-block"><div class="card-body"> <h5 class="card-title">' +data[i].pro_libelle + '</h5> <p class="card-text">' + data[i].pro_description + '</p> <p class="cart-text">' + data[i].pro_prix + '€</p> <a href="#" class="btn btn-primary">Ajouter au panier</a></div></div>');
                i++;
            })
        }
    })
 })
