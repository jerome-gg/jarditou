
    <h1>Page d'inscription</h1>
    <div class="container">
        <form method="post" action="<?php site_url('Users/inscription') ?>">

          <!-- Champ Nom -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Nom">Nom </label>
            <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Enter your name" name="user_nom">
            <div class="red" id="errNomVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errNomSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('nom', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ Prenom -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Enter your first name" name="user_prenom">
            <div class="red" id="errPrenomVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errPrenomSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('prenom', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ Mail -->
          <div class="form-group col-sm-6 offset-3">
            <label for="mail">Adresse E-mail </label>
            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter your mail" name="user_mail">
            <div class="red" id="errMailVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errMailSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('mail', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ Rue -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Login">Rue</label>
            <input type="text" class="form-control" id="rue" placeholder="Enter your street" name="user_rue">
            <div class="red" id="errRueVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errRueSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('rue', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ ville -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Login">Ville</label>
            <input type="text" class="form-control" id="ville" placeholder="Enter your town" name="user_ville">
            <div class="red" id="errVilleVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errVilleSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('ville', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ code postal -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Login">Code Postal</label>
            <input type="text" class="form-control" id="cp" placeholder="Enter your cp" name="user_cp">
            <div class="red" id="errCpVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errCpSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('cp', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ pass -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Password1">Mot de passe</label>
            <input type="password" class="form-control" id="password1" placeholder="Password" name="user_pass">
            <div class="red" id="errPassVide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errPassSaisie">
                <p>Veuillez entrer une saisie valide.</p>
            </div>
            <?php echo form_error('pass1', '<div class= "red">', '</div>'); ?>
          </div>

          <!-- Champ pass2 -->
          <div class="form-group col-sm-6 offset-3">
            <label for="Password2">Vérification du mot de passe</label>
            <input type="password" class="form-control" id="password2" placeholder="Confirm your password" name="user_pass2">
            <div class="red" id="errPass2Vide">
                <p>Veuillez remplir le champ.</p>
            </div>
            <div class="red" id="errPass2Saisie">
                <p>Veuillez confirmer votre mot de pass précédent.</p>
            </div>
            <?php echo form_error('pass2', '<div class= "red">', '</div>'); ?>
          </div>

          <button type="submit" class="btn btn-primary offset-3" id="valider" value="valider">Envoyer</button>
        </form>
    </div>
