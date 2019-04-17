// filtre expression régulières
var filtre = new RegExp("^([A-za-z0-9]+)$");// 1 caractère min alphanumérique
var filtre2 = new RegExp("^([0-9]+)$");// 1 caractère min numérique
var filtre3 = new RegExp("^[A-Za-z]+[A-Za-z]+$");// 1 caractère min 
var filtre4 = new RegExp("^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$");// mail valide 
var filtre5 = new RegExp("^[[\'. A-Za-zéèàç]*$");// 0 ou plusieurs caractères description
var filtre6 = new RegExp("^[A-Za-z]*$");// 0 ou plusieurs caractères couleur
var filtre7 = new RegExp("^([0-9]+)([.]?[0-9]+)?$"); // champ prix

$(document).ready(function()
{
    $('#errRefVide, #errRefSaisie, #errLibVide, #errLibSaisie, #errPrixVide, #errPrixSaisie, #errRStkVide, #errRStkSaisie, #errCoulSaisie, #errDescSaisie ').hide();

    var erreur1 = false;
    var erreur2 = false;
    var erreur3 = false;
    var erreur4 = false;
    var erreur5 = false;
    var erreur6 = false;

    // contrôle du champ référence
    $("#reference").blur(function(){
        var contenu = $('#reference').val();
        var resultat = filtre.test(contenu);
        if (contenu.length == 0){
            $("#errRefVide").show();
            $("#errRefSaisie").hide();
            erreur1 = false;
        }else if (!resultat){
            $("#errRefVide").hide();
            $("#errRefSaisie").show();
            erreur1 = false;
        }else{
            $("#errRefVide").hide();
            $("#errRefSaisie").hide();
            erreur1 = true;
        }
    })
    // contrôle du champ libellé
    $("#libelle").blur(function(){
        var contenu = $('#libelle').val();
        var resultat = filtre.test(contenu);
        if (contenu.length == 0){
            $("#errLibVide").show();
            $("#errLibSaisie").hide();
            erreur2 = false;
        }else if (!resultat){
            $("#errLibVide").hide();
            $("#errLibSaisie").show();
            erreur2 = false;
        }else{
            $("#errLibVide").hide();
            $("#errLibSaisie").hide();
            erreur2 = true;
        }
    })
    // contrôle du champ prix
    $("#prix").blur(function(){
        var contenu = $('#prix').val();
        var resultat = filtre7.test(contenu);
        if (contenu.length == 0){
            $("#errPrixVide").show();
            $("#errPrixSaisie").hide();
            erreur3 = false;
        }else if (!resultat){
            $("#errPrixVide").hide();
            $("#errPrixSaisie").show();
            erreur3 = false;
        }else{
            $("#errPrixVide").hide();
            $("#errPrixSaisie").hide();
            erreur3 = true;
        }
    })
    // contrôle du champ stock
    $("#stock").blur(function(){
        var contenu = $('#stock').val();
        var resultat = filtre2.test(contenu);
        if (contenu.length == 0){
            $("#errRStkVide").show();
            $("#errRStkSaisie").hide();
            erreur4 = false;
        }else if (!resultat){
            $("#errRStkVide").hide();
            $("#errRStkSaisie").show();
            erreur4 = false;
        }else{
            $("#errRStkVide").hide();
            $("#errRStkSaisie").hide();
            erreur4 = true;
        }
    })
    // contrôle du champ couleur
    $("#couleur").blur(function(){
        var contenu = $('#couleur').val();
        var resultat = filtre6.test(contenu);
        if (!resultat){
            $("#errCoulSaisie").show();
            erreur5 = false;
        }else{
            $("#errCoulSaisie").hide();
            erreur5 = true;
        }
    })
    // contrôle du champ description
    $("#description").blur(function(){
        var contenu = $('#description').val();
        var resultat = filtre5.test(contenu);
        if (!resultat){
            $("#errDescSaisie").show();
            erreur6 = false;
        }else{
            $("#errDescSaisie").hide();
            erreur6 = true;
        }
    })
    
    // contrôle du boutton valider et annule l'envoi si un défaut
    $("#valider").click(function(event){

        // contrôle du champ référence
        var contenu = $('#reference').val();
        var resultat = filtre.test(contenu);
        if (contenu.length == 0){
            $("#errRefVide").show();
            $("#errRefSaisie").hide();
            erreur1 = false;
        }else if (!resultat){
            $("#errRefVide").hide();
            $("#errRefSaisie").show();
            erreur1 = false;
        }else{
            $("#errRefVide").hide();
            $("#errRefSaisie").hide();
            erreur1 = true;
        }

        // contrôle du champ libellé
        var contenu = $('#libelle').val();
        var resultat = filtre.test(contenu);
        if (contenu.length == 0){
            $("#errLibVide").show();
            $("#errLibSaisie").hide();
            erreur2 = false;
        }else if (!resultat){
            $("#errLibVide").hide();
            $("#errLibSaisie").show();
            erreur2 = false;
        }else{
            $("#errLibVide").hide();
            $("#errLibSaisie").hide();
            erreur2 = true;
        }
    // contrôle du champ prix
        var contenu = $('#prix').val();
        var resultat = filtre7.test(contenu);
        if (contenu.length == 0){
            $("#errPrixVide").show();
            $("#errPrixSaisie").hide();
            erreur3 = false;
        }else if (!resultat){
            $("#errPrixVide").hide();
            $("#errPrixSaisie").show();
            erreur3 = false;
        }else{
            $("#errPrixVide").hide();
            $("#errPrixSaisie").hide();
            erreur3 = true;
        }
    // contrôle du champ stock
        var contenu = $('#stock').val();
        var resultat = filtre2.test(contenu);
        if (contenu.length == 0){
            $("#errRStkVide").show();
            $("#errRStkSaisie").hide();
            erreur4 = false;
        }else if (!resultat){
            $("#errRStkVide").hide();
            $("#errRStkSaisie").show();
            erreur4 = false;
        }else{
            $("#errRStkVide").hide();
            $("#errRStkSaisie").hide();
            erreur4 = true;
        }
    // contrôle du champ couleur
        var contenu = $('#couleur').val();
        var resultat = filtre6.test(contenu);
        if (!resultat){
            $("#errCoulSaisie").show();
            erreur5 = false;
        }else{
            $("#errCoulSaisie").hide();
            erreur5 = true;
        }
    // contrôle du champ description
        var contenu = $('#description').val();
        var resultat = filtre5.test(contenu);
        if (!resultat){
            $("#errDescSaisie").show();
            erreur6 = false;
        }else{
            $("#errDescSaisie").hide();
            erreur6 = true;
        }

        if( !erreur1 ||
            !erreur2 ||
            !erreur3 ||
            !erreur4 ||
            !erreur5 || 
            !erreur6){
                event.preventDefault();
            }

    }) 
 

});