<?php
        ob_start();
    ?>
        <main class="count">
            
        </main>

    <?php 
        $page = ob_get_clean();

        require 'template/template.php';
     ?>