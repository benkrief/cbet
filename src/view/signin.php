<html>
<head>
    <title> Prêt à nous rejoindre ? </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <h2> Nouveau Client ? </h2>
    <form action="signin.php" method="POST">
       <!-- <table>
        <div class="form-row">
            <tr class="genre">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <td><label class="btn btn-secondary active">
            <input type="radio" name="genre" id="men" value="Monsieur" checked> Monsieur
            </label></td>
            <td><label class="btn btn-secondary">
            <input type="radio" name="genre" id="women" value ="Madame" >Madame
            </label></td>
            <td><label class="btn btn-secondary">
            <input type="radio" name="genre" id="other" value ="Autre"> Autre
            </label></td>
            </div>
            <tr class="form-group col-md-6">
                <td><label for="nom">Votre nom :</label></td>
                <td><input id="nom" type="name" name="nom" placeholder="Nom" required autofocus></td>
            </tr>
            <tr class="form-group col-md-6">
                <td><label for="prenom"> Votre prénom : </label></td>
                <td><input id="prenom" type="text" name="prenom" placeholder="Prénom"required></td>
            </tr>
            <tr class="form-group col-md-6">
                <td><label for="dnais"> Votre date de naissance : </label></td>
                <td><input id="dnais" type="date" name="dnais" placeholder="AAAA-MM-JJ" onkeyup="verify('dnais')" required></td>
            </tr>
            <tr class="form-group col-md-6">
                <td><label for="adresse"> Votre adresse : </label></td>
                <td><input id="adresse" type="text" name="adresse" placeholder="Adresse"required></td>
            </tr>
            <tr class="form-group col-md-6 "id="email">
                <td><label for="email"> Votre email : </label></td>
                <td><input id="email" type="mail" name="email" onkeyup="verify('email')" placeholder="cbet@mail.com" required></td>
            </tr>
            <tr class ="form-group col-md-6" id="mdp">
                <td><label for="mdp"> Votre password : </label></td>
                <td><input id="mdp" type="password" name="mdp" onkeyup="verify('mdp')" required></td>
            </tr>
            </div>
        </table>
    <input type="submit" name="valider" class="btn btn-primary" value="OK"> -->
        
        <div class="form-row">
            <div class="genre">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label for="men" class="btn btn-secondary active">
            <input type="radio" name="genre" id="men" value="Monsieur" checked> Monsieur
            </label>
           <label class="btn btn-secondary">
            <input type="radio" name="genre" id="women" value ="Madame" >Madame
            </label>
           <label class="btn btn-secondary">
            <input type="radio" name="genre" id="other" value ="Autre"> Autre
            </label>
            </div>
        <div class="form-group">
    <label for="name"> Nom </label>
    <input type="text" class="form-text text-muted" id="name" placeholder="Nom">
  </div>
        <div class="form-group">
    <label for="prenom"> Prénom</label>
    <input type="text" class="form-text text-muted" id="prenom" placeholder="Prénom">
  </div>
    <div class="form-group">
    <label for="dnais"> Date de Naissance</label>
    <input type="date" class="form-text text-muted" id="dnais" placeholder="AAAA-MM-DD">
  </div>
    <div class="form-group">
        <label for="adresse">Votre Adresse</label>
        <input type="text" class="form-text text-muted" id="adress" placeholder="Adresse">
  </div>
  
  <div class="form-group">
    <label for="mail">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  onkeyup="verify('email')" placeholder="cbet@mail.com" required>
    <small id="emailHelp" class="form-text text-muted">On le garde pour nous.</small>
  </div>

  <div class="form-group">
    <label for="mdp">Mot de Passe</label>
    <input type="password" class="form-control" id="password"  onkeyup="verify('mdp')" placeholder="Password">
  </div>
  <input type="submit" name="valider" class="btn btn-primary" value="OK">
    </form>
</body>
</html>
<?php
if (isset ($_POST['valider'])){
    $gender = $_POST['genre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dnais = $_POST['dnais'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $host = "localhost";
    $user = "ben";
    $password = "ben11";
    $database = "cbet";

    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli ->connect_errno) {
        die ("Echec lors de la connexion ". $mysqli->connect_error);
    }

    $sql = "INSERT INTO client(genre, nom, prenom, dnais, adresse, email, mdp) VALUES(\"$gender\",\"$nom\", \"$prenom\",\"$dnais\",\"$adresse\",\"$email\",\"$mdp\")";
    $query ="SELECT email FROM client where email='".$_POST['email']."'";
    if ($resultA = mysqli_query($mysqli, $query)) {
        $count=mysqli_num_rows($resultA);
    } 
    if ($count==0){
    $resultat = $mysqli -> query($sql);

    if  (!$resultat) {
        echo "<p>Impossible de créer le profil $nom. </p>" ;
    }

    else { 
        $code = $mysqli->insert_id;

    }
} 
else {print( "<font color='red'><h4>Cette adresse mail est deja utilisée</h4></font>");}
    
if($gender == "Monsieur"){
    echo "bonjour MR";
}
elseif ($gender =="Madame"){
    echo "bonjour mme";
}
else {echo "autre";}
}

 
?>
