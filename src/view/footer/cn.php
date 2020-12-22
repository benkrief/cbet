<?php
        ob_start();
        
    ?>
<div id ="newsletter">
      
    
  <h1>
    Contactez-nous ! 
  </h1>
  <p id="texte">
     Vous avez recontré des problèmes, ou tout simplement vous avez des questions merci de nous appeller de 9H à 20h, du lundi au Vendredi au 01 23 45 67 89.<br/>
     Vous pouvez egalement nous contacter par mail a l'adresse <object id="email"><a href="mailto:contactsupport@cbet.com"> contactsupport@cbet.com </a> </object> <br/>
     Vous pouvez adresser un courrier à notre service Relations Clients à l'adresse suivante : C'BET – Service Relations Clients, 90 rue de Tolbiac, 75013 Paris,France

  </p>
  </div>
  <style>
  #newsletter{
    background-color: mediumorchid;
    width:60%;
    border-radius:25px;
    border:solid;
    position: relative;
    left:18%;
    padding: 12px;
  }
  h1{font-family: 'Lobster Two', cursive;
  font-size:200%;
  font-weight: bold;
  text-decoration:underline;} 
 #texte { 
   font-size:150%;
   font-family: 'Prociono', cursive;
   font-weight: bold;
   color:white; 
  }

  </style>

<?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>