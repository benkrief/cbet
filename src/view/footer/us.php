<?php
        ob_start();
        
    ?>
<div id=us>
    <h1><center>QUI SOMMES NOUS ?</center> </h1>
    <p class="texte">
        Nous sommes des étudiants (bon je suis seul mais ca fait trop prétentieux de dire JE) qui ont le goût de la culture générale et l'envie de la partager à tous.
        <br>
        MAIS, ce n'est pas tout : on s'est dit pourquoi ne pas offrir la possibilité aux gens de pouvoir miser sur leur culture et de pouvoir gagner en argent REEL.
        <br>
        On a donc Créer C'BET le premier site de paris culturel en ligne pour vous, pour nous, pour la culture.
        <br>
        <h4>Alors venez jouer dès maintenant</h4>
    </p>   
</div>
<style>
    #us{
        background-color: mediumorchid;
          width:60%;
          border-radius:25px;
          border:solid;
          position: relative;
          left:18%;
          padding: 12px;
        }
        h1{
          font-family: 'Georgia', cursive;
        font-size:200%;
        font-weight: bold;
        text-decoration:underline;
        } 
       
      .texte { 
         font-size:150%;
         font-family: 'Georgia', cursive;
         font-weight: bold;
         color:white; 
        }
</style>
<?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>