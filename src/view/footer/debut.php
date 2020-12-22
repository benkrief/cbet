<?php
        ob_start();
        
    ?>
<div id=deb>
    <h1><center>Comment Jouer  ?</center> </h1>
    <p class="texte">
       <b>Le principe ? </b> Il est très simple : tu choisis ton quiz -> tu mises la sommes que tu veux ... et c'est parti ! 
        <br>
        <b>Mais concretement on gagne quand ? </b> Tu as donc choisis puis misé. Dès maintenant tu vas avoir 10 questions à la suite tu dois répondre à toute avec la bonne réponse A CHAQUE TOUR.
        <br>
        <b>Mais concretement on gagne combien ? </b> Tu as donc misé une somme mais avant de débuter le quiz il y a sa cote plus un quiz est dur plus la coté est élévée. A la fin si tu finis ton quiz avec tes 10 bonnes réponses tu remportes la somme misée x cote.
        <br>
        <b>Un exemple ? </b> Imaginons, tu fais le quiz 1 qui est très simple sa cote est a 1.2 tu mises 10€ si tu réponds bon à toutes les questions tu gagnes 12€. C'est Clair ?
        <br>
        <h4>Alors viens jouer dès maintenant ! </h4>
    </p>   
</div>
<style>
    #deb{
        background-color: mediumorchid;
          width:60%;
          border-radius:25px;
          border:solid;
          position: relative;
          left:18%;
          padding: 12px;
        }
        h1{
          font-family: 'Lobster Two', cursive;
        font-size:200%;
        font-weight: bold;
        text-decoration:underline;
        } 
       
      .texte { 
         font-size:150%;
         font-family: 'Prociono', cursive;
         font-weight: bold;
         color:white; 
        }
        h4{
          
         font-family: 'Prociono', cursive;
         color:white; 
        
        }
</style>
<?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>