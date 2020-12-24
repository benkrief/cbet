<?php
        ob_start();
        
    ?>
        <main class="count">
            <div class="error" style ="position : relative; bottom:5px;">
                <?php 
            
                    if($_GET["error"]==1)
                    {
                        echo '<br><div class="erreur" style="color :white"> <label style="position: relative; left: 35%; margin: 20px;">Pour jouer, il faut se connecter !</label></div>';
                    }
                ?>
            </div>
            <div  id="sign"><?php require_once 'src/view/signin.php';?> </div>
            <div id="log"><?php require_once 'src/view/login.php'?></div>
            

        </main>

    <?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>