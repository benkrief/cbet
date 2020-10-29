<?php
        ob_start();
    ?>
        <main class="count">
            <div>Connection : <?php require_once 'src/view/login.php'; ?></div> <br>
            <div>Inscription : <?php require_once 'src/view/signin.php';?> </div>

        </main>

    <?php 
        $page = ob_get_clean();

        require 'template/template.php';
     ?>