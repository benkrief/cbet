<head>

<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
</head><body class="login">
<div class="login">
    <h2 class="login">Déjà client chez nous ? <br/> Alors faites comme chez vous...</h2>
    <form action='Panier.php' method='POST'>
        <table class="login">
            <tr id='l_email'>
                <td><label for='email'> Votre email : </label></td>
                <td><input id='email' type='email' name='email' placeholder="happism@mail.com" onkeyup="verify('email')" value="<?php if (isset ($_POST['valider'])){echo $_POST['email'];};?>"></td>
            </tr>
            <tr id='l_mdp'>
                <td><label for='mdp'> Votre mot secret : </label></td>
                <td><input id='mdp' type='password' name='mdp' onkeyup="verify('mdp')"></td>
            </tr>
        </table>
        <input class="login" id="l_valid" type='submit' name='connect' value='GO !'>
    </form>
</div>
</body>

<div class="ui inverted segment">
  <div class="ui inverted form">
    <div class="two fields">
      <div class="field">
        <label>First Name</label>
        <input placeholder="First Name" type="text">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input placeholder="Last Name" type="text">
      </div>
    </div>
    <div class="inline field">
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden">
        <label>I agree to the terms and conditions</label>
      </div>
    </div>
    <div class="ui submit button">Submit</div>
  </div>
</div>

<?php
    if (isset($_POST["connect"])){
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $query2 ="SELECT email FROM client where email='".$_POST['email']."'";
        if ($resultA = mysqli_query($mysqli, $query2)) {
            $count=mysqli_num_rows($resultA);
        } 
        if ($count==1){
            $query1 ="SELECT mdp FROM client WHERE email='".$_POST['email']."'";
            if ($result = mysqli_query($mysqli, $query1)) {                
                /* Récupération du tableau d'objet */
                while ($obj = mysqli_fetch_object($result)) {
                    $mdp_essai=($obj->mdp);
                }
            }
            if($mdp_essai==$mdp) {
                $query3 ="SELECT prenom FROM client WHERE email='".$_POST['email']."'";
                if ($resultB = mysqli_query($mysqli, $query3)) {                
                    /* Récupération du tableau d'objet */
                    while ($obj = mysqli_fetch_object($resultB)) {
                        $prenom=($obj->prenom);
                    }
                    mysqli_free_result($result);
                }
                $_SESSION['email']=$email;
                $_SESSION['nom']=$nom;
                $_SESSION['prenom']=$prenom; 
                $_SESSION['dnais']=$dnais;
                $_SESSION['adresse']=$adresse; 
                echo"<meta http-equiv='refresh' content='0; url=Panier.php'>";
            }
            else {
                echo "<p class='id_faux'>Vos identifiants sont incorrects</p>";
            }
        }
        else{
            echo "<p class='id_faux'>Vos identifiants sont incorrects</p>"; 
            }  
    }
?>