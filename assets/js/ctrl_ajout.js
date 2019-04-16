// filtre expression régulières
var filtre = new RegExp("^([A-za-z0-9]+)$");// 1 caractère min alphanumérique
var filtre2 = new RegExp("^([0-9]+)$");// 1 caractère min numérique
var filtre3 = new RegExp("^[A-Za-z]+[A-Za-z]+$");// 1 caractère min 
var filtre4 = new RegExp("^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$");// mail valide 


$(document).ready(function()
{
    $('#errRefVide, #errRefSaisie, #errLibVide, #errLibSaisie, #errPrixVide, #errPrixSaisie, #errRStkVide, #errRStkSaisie ').hide();

    // contrôle du champ référence
    $("#reference").blur(function(){
        var contenu = $('#reference').val();
        var resultat = filtre3.test(contenu);
        if (contenu.length == 0){
            $("#errRefVide").show();
            $("#errRefSaisie").hide();
        }else if (!resultat){
            $("#errRefVide").hide();
            $("#errRefSaisie").show();
        }else{
            $("#errRefVide").hide();
            $("#errRefSaisie").hide();
        }
    })
    // contrôle du champ libellé
    $("#libelle").blur(function(){
        var contenu = $('#libelle').val();
        var resultat = filtre.test(contenu);
        if (contenu.length == 0){
            $("#errLibVide").show();
            $("#errLibSaisie").hide();
        }else if (!resultat){
            $("#errLibVide").hide();
            $("#errLibSaisie").show();
        }else{
            $("#errLibVide").hide();
            $("#errLibSaisie").hide();
        }
    })
    // contrôle du champ prix
    $("#prix").blur(function(){
        var contenu = $('#prix').val();
        var resultat = filtre2.test(contenu);
        if (contenu.length == 0){
            $("#errPrixVide").show();
            $("#errPrixSaisie").hide();
        }else if (!resultat){
            $("#errPrixVide").hide();
            $("#errPrixSaisie").show();
        }else{
            $("#errPrixVide").hide();
            $("#errPrixSaisie").hide();
        }
    })
    // contrôle du champ stock
    $("#stock").blur(function(){
        var contenu = $('#stock').val();
        var resultat = filtre2.test(contenu);
        if (contenu.length == 0){
            $("#errRStkVide").show();
            $("#errRStkSaisie").hide();
        }else if (!resultat){
            $("#errRStkVide").hide();
            $("#errRStkSaisie").show();
        }else{
            $("#errRStkVide").hide();
            $("#errRStkSaisie").hide();
        }
    })


});