<h1>Page de connexion</h1>
    <div class="container">
        <form method="post" action="<?php echo site_url('Users/connexion')?>">
          <div class="form-group col-sm-6 offset-3">
            <label for="login">Login </label>
            <input type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter your login" name="user_login">
            <?php echo form_error('user_login', '<div class= "red">', '</div>'); ?>
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="pass">Mot de passe</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="user_pass">
            <?php echo form_error('user_pass', '<div class= "red">', '</div>'); ?>
          </div>
          <button type="submit" class="btn btn-primary offset-3">Connexion</button>
        </form>
    </div>