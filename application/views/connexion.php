<h1>Page de connexion</h1>
    <div class="container">
        <form method="post" action="<?php echo site_url('Users/connexion')?>">
          <div class="form-group col-sm-6 offset-3">
            <label for="mail">E-Mail </label>
            <input type="text" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter your mail" name="user_mail" autofocus>
            <?php echo form_error('user_mail', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="pass">Mot de passe</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="user_pass">
            <?php echo form_error('user_pass', '<div class= "red">', '</div>'); ?>
          </div>
          <button type="submit" class="btn btn-primary offset-3">Connexion</button>
        </form>
    </div>