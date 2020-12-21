    <h2 class="signin"> Nouveau Client ? </h2>
      <form action="?page=account&action=sign" method="POST" style=" position:relative; left:10%; margin-left:20px;padding:10px;">
            <div class="genre ">
              <div data-toggle="buttons">
                <label for="men" class="btn btn-secondary active">
                <input type="radio" name="gender" id="men" value="Monsieur" checked>  Monsieur
                </label>
                <label class="btn btn-secondary">
                <input type="radio" name="gender" id="women" value ="Madame" >  Madame
                </label>
              </div>
            </div>
            <div class="info">
              <label for="name"> Nom :</label>
              <input type="text" id ="nom" class="form-text text-muted" name="nom" placeholder="Nom">
            </div>
            <div class="info" >
              <label for="prenom"> Prénom :</label>
              <input type="text" id="prenom" class="form-text text-muted" name="prenom" placeholder="Prénom">
            </div>
            <div class="info">
              <label for="dnais" > Date de Naissance :</label>
              <input type="date" id="dnais" class="form-text text-muted" name="dob" >
            </div>
            <div class="info">
              <label for="adresse" >Votre Adresse :</label>
              <input type="text" id="adresse" class="form-text text-muted" name="adress" placeholder="Adresse">
            </div>
            <div class="info">
              <label for="mail">Email :</label>
              <input type="email" id="email" name ="mail" class="form-text text-muted"  aria-describedby="emailHelp"  onkeyup="verify('email')" placeholder="cbet@mail.com" required>
            </div>
            <div class="info">
             <label for="mdp" >Mot de Passe :</label>
             <input type="password" id="mdp" name="password" class="form-text text-muted"  placeholder="Password">
            </div>
          <input type="submit"id="s_valid" name="submit" value="GO">
      </form>
