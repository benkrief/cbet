<?php
        ob_start();
        
    ?>
        <main class="count">
            
            <div  id="sign"><?php require_once 'src/view/signin.php';?> </div>
            <div id="log"><?php require_once 'src/view/login.php'?></div>
            

        </main>

    <?php 
        $page = ob_get_clean();
        

        require 'template/template.php';
     ?>