<h1>Page de connexion</h1>
    <div class="container">
        <form method="post" action="<?php echo site_url('Produits/connexion')?>;">
          <div class="form-group col-sm-6 offset-3">
            <label for="exampleInputEmail1">Adresse E-mail </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          </div>
          <div class="form-group col-sm-6 offset-3">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
          </div>
          <button type="submit" class="btn btn-primary offset-3">Envoyer</button>
        </form>
    </div>