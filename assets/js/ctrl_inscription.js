
$(document).ready(function()
{

    var pass;
    var erreur1 = false;
    var erreur2 = false;
    var erreur3 = false;
    var erreur4 = false;
    var erreur5 = false;
    var erreur6 = false;
    var erreur7 = false;
    var erreur8 = false;

    // masquage des champs au chargement de la page
    $('#errNomVide , #errNomSaisie ').hide();
    $('#errPrenomVide , #errPrenomSaisie ').hide();
    $('#errMailVide , #errMailSaisie ').hide();
    $('#errRueVide , #errRueSaisie ').hide();
    $('#errVilleVide , #errVilleSaisie ').hide();
    $('#errCpVide , #errCpSaisie ').hide();
    $('#errPassVide , #errPassSaisie ').hide();
    $('#errPass2Vide , #errPass2Saisie ').hide();

    

    // contrôle du champ nom
    $("#nom").blur(function(){
        var contenu = $('#nom').val();
        var resultat = filtreNomPrenom.test(contenu);
        if (contenu.length == 0){
            $("#errNomVide").show();
            $("#errNomSaisie").hide();
            erreur1 = false;
        }else if (!resultat){
            $("#errNomVide").hide();
            $("#errNomSaisie").show();
            erreur1 = false;
        }else{
            $("#errNomVide").hide();
            $("#errNomSaisie").hide();
            erreur1 = true;
        }
    })

    
    // contrôle du champ prenom
    $("#prenom").blur(function(){
        var contenu = $('#prenom').val();
        var resultat = filtreNomPrenom.test(contenu);
        if (contenu.length == 0){
            $("#errPrenomVide").show();
            $("#errPrenomSaisie").hide();
            erreur2 = false;
        }else if (!resultat){
            $("#errPrenomVide").hide();
            $("#errPrenomSaisie").show();
            erreur2 = false;
        }else{
            $("#errPrenomVide").hide();
            $("#errPrenomSaisie").hide();
            erreur2 = true;
        }
    })
    

    // contrôle du champ mail
    $("#mail").blur(function(){
        var contenu = $('#mail').val();
        var resultat = filtreMail.test(contenu);
        if (contenu.length == 0){
            $("#errMailVide").show();
            $("#errMailSaisie").hide();
            erreur3 = false;
        }else if (!resultat){
            $("#errMailVide").hide();
            $("#errMailSaisie").show();
            erreur3 = false;
        }else{
            $("#errMailVide").hide();
            $("#errMailSaisie").hide();
            erreur3 = true;
        }
    })
    

    // contrôle du champ rue
    $("#rue").blur(function(){
        var contenu = $('#rue').val();
        var resultat = generique.test(contenu);
        if (contenu.length == 0){
            $("#errRueVide").show();
            $("#errRueSaisie").hide();
            erreur4 = false;
        }else if (!resultat){
            $("#errRueVide").hide();
            $("#errRueSaisie").show();
            erreur4 = false;
        }else{
            $("#errRueVide").hide();
            $("#errRueSaisie").hide();
            erreur4 = true;
        }
    })
    

    // contrôle du champ ville
    $("#ville").blur(function(){
        var contenu = $('#ville').val();
        var resultat = generique.test(contenu);
        if (contenu.length == 0){
            $("#errVilleVide").show();
            $("#errVilleSaisie").hide();
            erreur5 = false;
        }else if (!resultat){
            $("#errVilleVide").hide();
            $("#errVilleSaisie").show();
            erreur5 = false;
        }else{
            $("#errVilleVide").hide();
            $("#errVilleSaisie").hide();
            erreur5 = true;
        }
    })
    

    // contrôle du champ cp
    $("#cp").blur(function(){
        var contenu = $('#cp').val();
        var resultat = filtrecp.test(contenu);
        if (contenu.length == 0){
            $("#errCpVide").show();
            $("#errCpSaisie").hide();
            erreur6 = false;
        }else if (!resultat){
            $("#errCpVide").hide();
            $("#errCpSaisie").show();
            erreur6 = false;
        }else{
            $("#errCpVide").hide();
            $("#errCpSaisie").hide();
            erreur6 = true;
        }
    })
    

    // contrôle du champ pass
    $("#password1").blur(function(){
        var contenu = $('#password1').val();
        pass = contenu;
        var resultat = generique.test(contenu);
        if (contenu.length == 0){
            $("#errPassVide").show();
            $("#errPassSaisie").hide();
            erreur7 = false;
        }else if (!resultat){
            $("#errPassVide").hide();
            $("#errPassSaisie").show();
            erreur7 = false;
        }else{
            $("#errPassVide").hide();
            $("#errPassSaisie").hide();
            erreur7 = true;
        }
    })
    

    // contrôle du champ pass2
    $("#password2").blur(function(){
        var contenu = $('#password2').val();
        /* var resultat = filtre2.test(contenu); */
        if (contenu.length == 0){
            $("#errPass2Vide").show();
            $("#errPass2Saisie").hide();
            erreur8 = false;
        }else if (pass != contenu){
            $("#errPass2Vide").hide();
            $("#errPass2Saisie").show();
            erreur8 = false;
        }else{
            $("#errPass2Vide").hide();
            $("#errPass2Saisie").hide();
            erreur8 = true;
        }
    })

     // contrôle du boutton valider et annule l'envoi si un défaut
     $("#valider").click(function(event){

    // contrôle du champ nom   

        var contenu = $('#nom').val();
        var resultat = filtreNomPrenom.test(contenu);
        if (contenu.length == 0){
            $("#errNomVide").show();
            $("#errNomSaisie").hide();
            erreur1 = false;
        }else if (!resultat){
            $("#errNomVide").hide();
            $("#errNomSaisie").show();
            erreur1 = false;
        }else{
            $("#errNomVide").hide();
            $("#errNomSaisie").hide();
            erreur1 = true;
        }
    

    // contrôle du champ prenom
    
        var contenu = $('#prenom').val();
        var resultat = filtreNomPrenom.test(contenu);
        if (contenu.length == 0){
            $("#errPrenomVide").show();
            $("#errPrenomSaisie").hide();
            erreur2 = false;
        }else if (!resultat){
            $("#errPrenomVide").hide();
            $("#errPrenomSaisie").show();
            erreur2 = false;
        }else{
            $("#errPrenomVide").hide();
            $("#errPrenomSaisie").hide();
            erreur2 = true;
        }


    // contrôle du champ mail
    
        var contenu = $('#mail').val();
        var resultat = filtreMail.test(contenu);
        if (contenu.length == 0){
            $("#errMailVide").show();
            $("#errMailSaisie").hide();
            erreur3 = false;
        }else if (!resultat){
            $("#errMailVide").hide();
            $("#errMailSaisie").show();
            erreur3 = false;
        }else{
            $("#errMailVide").hide();
            $("#errMailSaisie").hide();
            erreur3 = true;
        }
  

    // contrôle du champ rue
   
        var contenu = $('#rue').val();
        var resultat = generique.test(contenu);
        if (contenu.length == 0){
            $("#errRueVide").show();
            $("#errRueSaisie").hide();
            erreur4 = false;
        }else if (!resultat){
            $("#errRueVide").hide();
            $("#errRueSaisie").show();
            erreur4 = false;
        }else{
            $("#errRueVide").hide();
            $("#errRueSaisie").hide();
            erreur4 = true;
        }

    // contrôle du champ ville
    
        var contenu = $('#ville').val();
        var resultat = generique.test(contenu);
        if (contenu.length == 0){
            $("#errVilleVide").show();
            $("#errVilleSaisie").hide();
            erreur5 = false;
        }else if (!resultat){
            $("#errVilleVide").hide();
            $("#errVilleSaisie").show();
            erreur5 = false;
        }else{
            $("#errVilleVide").hide();
            $("#errVilleSaisie").hide();
            erreur5 = true;
        }
   

    // contrôle du champ cp
    
        var contenu = $('#cp').val();
        var resultat = filtrecp.test(contenu);
        if (contenu.length == 0){
            $("#errCpVide").show();
            $("#errCpSaisie").hide();
            erreur6 = false;
        }else if (!resultat){
            $("#errCpVide").hide();
            $("#errCpSaisie").show();
            erreur6 = false;
        }else{
            $("#errCpVide").hide();
            $("#errCpSaisie").hide();
            erreur6 = true;
        }


    // contrôle du champ pass
    
        var contenu = $('#password1').val();
        pass = contenu;
        var resultat = generique.test(contenu);
        if (contenu.length == 0){
            $("#errPassVide").show();
            $("#errPassSaisie").hide();
            erreur7 = false;
        }else if (!resultat){
            $("#errPassVide").hide();
            $("#errPassSaisie").show();
            erreur7 = false;
        }else{
            $("#errPassVide").hide();
            $("#errPassSaisie").hide();
            erreur7 = true;
        }

    // contrôle du champ pass2
    
        var contenu = $('#password2').val();
        
        if (contenu.length == 0){
            $("#errPass2Vide").show();
            $("#errPass2Saisie").hide();
            erreur8 = false;
        }else if (pass != contenu){
            $("#errPass2Vide").hide();
            $("#errPass2Saisie").show();
            erreur8 = false;
        }else{
            $("#errPass2Vide").hide();
            $("#errPass2Saisie").hide();
            erreur8 = true;
        }

        if( !erreur1 ||
            !erreur2 ||
            !erreur3 ||
            !erreur4 ||
            !erreur5 || 
            !erreur6 || 
            !erreur7 || 
            !erreur8){
                event.preventDefault();
            }

    })
     
    
});
