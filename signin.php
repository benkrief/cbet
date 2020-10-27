<html>
<head>
    <link rel="stylesheet" href="account.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
</head>

<body class="signin">
    <div class="signin" id="gauche">
    <h2 class="signin"> Nouveau Client ? </h2>
    <form action="Panier.php" method="POST">
        <table class="signin">
            <tr class="info">
                <td><label for="nom">Votre nom :</label></td>
                <td><input id="nom" type="name" name="nom" placeholder="Nom" value="<?php if (isset ($_POST['valider'])){echo $_POST['nom'];}?>" required autofocus></td>
            </tr>
            <tr class="info">
                <td><label for="prenom"> Votre prénom : </label></td>
                <td><input id="prenom" type="text" name="prenom" placeholder="Prénom" value="<?php if (isset ($_POST['valider'])){echo $_POST['prenom'];}?>" required></td>
            </tr>
            <tr class="info">
                <td><label for="dnais"> Votre date de naissance : </label></td>
                <td><input id="dnais" type="date" name="dnais" placeholder="AAAA-MM-JJ" onkeyup="verify('dnais')" value="<?php if (isset ($_POST['valider'])){echo $_POST['dnais'];}?>" required></td>
            </tr>
            <tr class="info">
                <td><label for="adresse"> Votre adresse : </label></td>
                <td><input id="adresse" type="text" name="adresse" placeholder="Adresse" value="<?php if (isset ($_POST['valider'])){echo $_POST['adresse'];}?>" required></td>
            </tr>
            <tr id="s_email">
                <td><label for="email"> Votre email : </label></td>
                <td><input id="email" type="mail" name="email" onkeyup="verify('email')" placeholder="happism@mail.com" value="<?php if (isset ($_POST['valider'])){echo $_POST['email'];};?>" required></td>
            </tr>
            <tr id="s_mdp">
                <td><label for="mdp"> Votre mot secret : </label></td>
                <td><input id="mdp" type="password" name="mdp" onkeyup="verify('mdp')" required></td>
            </tr>
        </table>
        <input class="signin" id="s_valid" type="submit" name="valider" value="OK">
    </form>
    </div>
</body>
</html>


<?php
if (isset ($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dnais = $_POST['dnais'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $host = "localhost";
    $user = "groupeA";
    $password = "thijai1A";
    $database = "groupeA";

    $mysqli = new mysqli($host, $user, $password, $database);
        if ($mysqli ->connect_errno) {
        die ("Echec lors de la connexion ". $mysqli->connect_error);
        }

    $sql = "INSERT INTO client(nom, prenom, dnais, adresse, email, mdp) VALUES(\"$nom\", \"$prenom\",\"$dnais\",\"$adresse\",\"$email\",\"$mdp\")";
    $query2 ="SELECT email FROM client where email='".$_POST['email']."'";
        if ($resultA = mysqli_query($mysqli, $query2)) {
        $count=mysqli_num_rows($resultA);
        } 
    if ($count==0){
        $resultat = $mysqli -> query($sql);

        if  (!$resultat) {
        echo "<p>Impossible de créer le profil $nom. </p>" ;
        }

        else { 
        $code = $mysqli->insert_id;
        $_SESSION['email']=$email;
        $_SESSION['nom']=$nom;
        $_SESSION['prenom']=$prenom; 
        $_SESSION['dnais']=$dnais;
        $_SESSION['adresse']=$adresse; 
        echo"<meta http-equiv='refresh' content='0; url=Panier.php'>";


        }
    } 
    else {
    print( "<p id='mail_indispo'>Cette adresse mail est déjà utilisée</p>");}
    
}

 
?>