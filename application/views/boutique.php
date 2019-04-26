<?php if(isset($_SESSION['user_droit'])){ ?>

    <div>
        Boutique comming soon!!!!!!
    </div>

<?php }else{ ?>

    <div>
        Veuillez vous connecter pour accèder à cette page.
        Vous allez être rediriger pour vous authentifier.    
    </div>

<?php 
header( "refresh:3; url=" .site_url('Users/connexion'));
}
?> 