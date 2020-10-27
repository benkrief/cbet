<?php
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    else
    {
        $action="";
    }
    
?>
    <nav class="onglet">
        <ul class="menu_onglet">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?page=quiz&action=quizz">Nos QUIZZ</a></li>
            <li><a href="index.php?page=wall&action=wall">Ta <i>BET</i> d'histoire</a></li>
            <li><a href="index.php?page=account&action=sign">Votre compte</a></li>
        </ul>
    </nav>