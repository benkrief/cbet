<?php
        ob_start();
        
    ?>
        <main class="count">
            <form action="?page=account&action=deposer" method="POST" style=" position:relative; left:10%; margin-left:20px;padding:10px;">
        <div class="info">
            <label for="valeur">Combien voulez vous déposer</label>  
            <input type="number" name="valeur" id="plus">
        </div>
        <div class="info">
              <label for="mail">Votre numéro de CB</label>
              <input type="number" id="cb" name ="cb" class="form-text text-muted"  placeholder="4978 1234 5678 9000" required>
            </div>
            <div class="info">
             <label for="dateex" >Date d'Expiration</label>
             <input type="number" id="de" name="de" class="form-text text-muted"  placeholder="01/21">
            </div>
            <div class="info">
             <label for="cvv" >CVV</label>
             <input type="number" id="cvv" name="cvv" class="form-text text-muted"  placeholder="770">
            </div>
            <input type="submit"id="s_valid" name="submit" value="Déposer">
        </form>

        <form action="?page=account&action=retirer" method="POST" style=" position:relative; left:10%; margin-left:20px;padding:10px;">
        <div class="info">
            <label for="valeur">Combien voulez vous retirer</label>  
            <input type="number" name="valeur" id="plus">
        </div>
        <div class="info">
              <label for="iban">Votre numéro d'IBAN'</label>
              <input type="texte" id="iban" name ="iban" class="form-text text-muted"  placeholder="FR75 1234 5678 9000" required>
            </div>
            
            <input type="submit"id="s_valid" name="submit" value="Retirer">
        </form>
        </main>

    <?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>