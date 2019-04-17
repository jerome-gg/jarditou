<?php header( "refresh:3; url=" .site_url('Produits/liste')); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Success</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">
</head>
<body>

    <div class="div_success" >
        <h3 class="success">Le formulaire à été correctement soumis</h3>
        <p class="success">Vous allez être redirigé dans quelques secondes.
            Si ce n'est pas le cas <a href="<?php site_url('Produits/liste') ?>" title="liens vers la liste">cliquez ici</a>.
        </p>
    </div>


</body>
</html>