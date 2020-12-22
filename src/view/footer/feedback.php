<?php
        ob_start();
        
    ?>
<div id ="retour">   
  <h1>
    Votre Retour
  </h1>
  <p id="texte">
     Votre avis compte pour nous et nous vous en remercions.<br/>
    Pour completer votre demarche, Merci de remplir ce formulaire qui nous sera transmis.
  </p>
  <form>
    <section ><span class="q"> Comment-avez vous connu notre site ? </span><br/>
      <input type="checkbox" name="pub"> Par de la Publicté <br/>
      <input type="checkbox" name="ami"> Un ami ou une personne vous en a parlé<br/>
      <input type="checkbox" name="web"> Grâce à une recherche sur internet<br/>
    </section>
    <section > <span class="q">Trouvez-vous notre site web facile de navigation?</span><br/>
   <input type="radio" name="easy"> Oui ! Très facile<br/>
   <input type="radio" name="easy"> Non j´ai rencontré des difficultés.<br/>
   <input type="radio" name="eays"> Oui mais on peut rajouter <input type="text" placeholder="Precisez">  <br/> 
</section>
<section><span class="q"> Trouvez-vous le contenu du site web clair et compréhensible ?</span><br/>
   <input type="radio" name="clair"> Oui ! Très clair<br/>
   <input type="radio" name="clair"> Non j´ai rencontré des difficultés.<br/>
   <input type="radio" name="clair"> Oui mais on peut rajouter <input type="text" placeholder="Precisez">  <br/> 
</section>
<section><span class="q">Avez-vous réussi à trouver sur notre site web ce que vous aviez cherché ?</span><br/>
   <input type="radio" name="find"> Oui ! Très facilement<br/>
   <input type="radio" name="find"> Non j´ai rencontré des difficultés.<br/>
   <input type="radio" name="find"> Oui mais on peut rajouter <input type="text" placeholder="Precisez"> <br/>  

    </section>
    <section> <span class="q">Aimez-vous le design de notre site web ?</span><br/>
   <input type="radio" name="design"> Oui ! Très stylé<br/>
   <input type="radio" name="design"> Non j´ai trouvé le tout mal accordé<br/>
   <input type="radio" name="design"> Oui mais on peut rajouter <input type="text" placeholder="Precisez">  <br/> 
</section>
    <section><span class="q"> Vous etes : </span> <select id="vald">
    <option> Un Homme</option><option> Une Femme</option><option> Autre</option>
    </select>
    </section>
   <button onclick="valider()">
     Valider vos choix ! 
    </button> 
  </form>
  </div>
</body>

<style>
  #texte{
    background-color: lightskyblue;
    width:80%;
    border-radius:25px;
    border:solid;
    margin-left:10%;
    font-family:"Advent+Pro", cursive; 
    font-size:140%;
    
            
          
    }
  #retour{
    background-color: mediumorchid;
    width:60%;
    border-radius:25px;
    border:solid;
    position: relative;
    left:18%;
    padding: 12px;
    }
  .q{
    font-family:"lobster two",cursive;
    font-size:150%;
    text-decoration:underline;
    font-weight:bold;
    margin-top:200px;
    margin-bottom:200px;
  }
  input{
    margin-top:20px;
    margin-bottom:20px;  
  }
  section{
    text-align:left;
    padding:20px;
    font-size:130%;
  }
  #vald{
    width:15%; 
    height:30%;
    background:none;
    border:solid;
    font-size:80%;
    margin-left:5px;
  }
</style>
<?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>