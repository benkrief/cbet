    <nav class="onglet">
        <ul class="menu_onglet">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?page=quiz&action=quizz">Nos QUIZZ</a></li>
            <li><a href="index.php?page=account&action=<?php if(isset($_COOKIE["pseudo"])){echo "list&usr=".$_SESSION["mail"];}else{echo"login";}?>">Votre compte</a></li>
        </ul>
    </nav>
   