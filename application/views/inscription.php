
    <h1>Page d'inscription</h1>
    <div class="container">
        <form method="post" action="<?php site_url('Users/inscription') ?>">
          <div class="form-group col-sm-6 offset-3">
            <label for="Nom">Nom </label>
            <input type="text" class="form-control" id="Nom" aria-describedby="emailHelp" placeholder="Enter your name" name="user_nom">
            <?php echo form_error('nom', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" id="Prenom" placeholder="Enter your first name" name="user_prenom">
            <?php echo form_error('prenom', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="mail">Adresse E-mail </label>
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter your mail" name="user_mail">
            <?php echo form_error('mail', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="Login">Login</label>
            <input type="text" class="form-control" id="Login" placeholder="Enter your login" name="user_login">
            <?php echo form_error('login', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="Password1">Mot de passe</label>
            <input type="password" class="form-control" id="Password1" placeholder="Password" name="user_pass">
            <?php echo form_error('pass1', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="Password2">Vérification du mot de passe</label>
            <input type="password" class="form-control" id="Password2" placeholder="Confirm your password" name="user_pass2">
            <?php echo form_error('pass2', '<div class= "red">', '</div>'); ?>
          </div>
          <button type="submit" class="btn btn-primary offset-3" value="valider">Envoyer</button>
        </form>
    </div>
