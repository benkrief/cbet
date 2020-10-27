    <?php
        ob_start();
    ?>
        <main class="quiz">
            <p>ICI C'est le quiz avec tous les quiz differents</p>
        </main>

    <?php 
        $page = ob_get_clean();

        require 'template/template.php';
     ?>