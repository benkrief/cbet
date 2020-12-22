<?php
        ob_start();
        
    ?>
<div id ="newsletter">
          
        
    <h1>
      Inscription à notre Newsletter
    </h1>
    <p id="texte">
      Vous souhaitez être toujours au courant de nos dernières promotions ? <br/>
      Vous aimez imaginez votre prochain gros gain ? <br/>
      Si oui alors inscrivez vous dans notre Newsletter <br/>
      <div id="button"><input type ="email" id="news" name="email" placeholder="name@cbet.com">
      <button id="inscrit" onclick="inscrip()"> Inscrivez-vous ! </button></div>
    </p>

    </div>

    <style>
      #newsletter{
        margin-top: 20px;
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
       
      #texte { 
         font-size:150%;
         font-family: 'Prociono', cursive;
         font-weight: bold;
         color:white; 
        }
        button{

        height:30%;
        padding:10px;
        border-radius:30px;
        background-color:rgba(133, 206, 235, 0.719);
        }
        input{
        width:20%;
        height:20%;
        padding:10px;
        text-align:center;
        }  
      
    </style>
    <?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>