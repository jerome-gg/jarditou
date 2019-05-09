$(document).ready(function()
{
    /**
     *   Page Boutique
     *  Animation de selection de catégorie
     */

        // Voir tout les produits
  $('#all').click(function () {
    $('#all').addClass("selected");
    $('#outillage').removeClass("selected");
    $('#plants').removeClass("selected");
    $('#arbres').removeClass("selected");
    $('#accessoires').removeClass("selected");
    $('#mobilier').removeClass("selected");
    $('#materiaux').removeClass("selected");
  });
         // Voir Outillage
  $('#outillage').click(function () {
    $('#outillage').addClass("selected");
    $('#all').removeClass("selected");
    $('#plants').removeClass("selected");
    $('#arbres').removeClass("selected");
    $('#accessoires').removeClass("selected");
    $('#mobilier').removeClass("selected");
    $('#materiaux').removeClass("selected");
  });

         // Voir Plants et semi
  $('#plants').click(function () {
    $('#plants').addClass("selected");
    $('#all').removeClass("selected");
    $('#outillage').removeClass("selected");
    $('#arbres').removeClass("selected");
    $('#accessoires').removeClass("selected");
    $('#mobilier').removeClass("selected");
    $('#materiaux').removeClass("selected");
  });

        // Voir Arbre et arbuste
  $('#arbres').click(function () {
    $('#arbres').addClass("selected");
    $('#all').removeClass("selected");
    $('#plants').removeClass("selected");
    $('#outillage').removeClass("selected");
    $('#accessoires').removeClass("selected");
    $('#mobilier').removeClass("selected");
    $('#materiaux').removeClass("selected");
  });

        // Voir Arbre et arbuste
  $('#accessoires').click(function () {
    $('#accessoires').addClass("selected");
    $('#all').removeClass("selected");
    $('#plants').removeClass("selected");
    $('#arbres').removeClass("selected");
    $('#outillage').removeClass("selected");
    $('#mobilier').removeClass("selected");
    $('#materiaux').removeClass("selected");
  });

        // Voir mobilier
  $('#mobilier').click(function () {
    $('#mobilier').addClass("selected");
    $('#all').removeClass("selected");
    $('#plants').removeClass("selected");
    $('#arbres').removeClass("selected");
    $('#accessoires').removeClass("selected");
    $('#outillage').removeClass("selected");
    $('#materiaux').removeClass("selected");
  });
        // Voir materiaux
  $('#materiaux').click(function () {
    $('#materiaux').addClass("selected");
    $('#all').removeClass("selected");
    $('#plants').removeClass("selected");
    $('#arbres').removeClass("selected");
    $('#accessoires').removeClass("selected");
    $('#outillage').removeClass("selected");
    $('#mobilier').removeClass("selected");
  });

  
  
  
           
});