<h2 class="signin"> Déja Betteur ? </h2>
      <form action="?page=account&action=log" method="POST" style=" position:relative; left:10%; margin-left:20px;padding:10px;">
        <div class="info">
              <label for="mail">Email :</label>
              <input type="email" id="email" name ="mail" class="form-text text-muted"  aria-describedby="emailHelp"  onkeyup="verify('email')" placeholder="cbet@mail.com" required>
            </div>
            <div class="info">
             <label for="mdp" >Mot de Passe :</label>
             <input type="password" id="mdp" name="password" class="form-text text-muted"  placeholder="Password">
            </div>
          <input type="submit"id="s_valid" value="Connexion">
      </form>
